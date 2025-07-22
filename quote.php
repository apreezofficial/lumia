<?php

$pricingConfig = json_decode(file_get_contents('pricing-config.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            light: '#6366f1',  // indigo-500
                            DEFAULT: '#4f46e5',  // indigo-600
                            dark: '#4338ca',  // indigo-700
                        },
                        secondary: {
                            light: '#8b5cf6',  // violet-500
                            DEFAULT: '#7c3aed',  // violet-600
                            dark: '#6d28d9',  // violet-700
                        },
                        dark: {
                            DEFAULT: '#1e1b4b',  // indigo-950
                            light: '#312e81',  // indigo-900
                        }
                    }
                }
            }
        }
    </script>
    <title>Project Cost Estimator | Lumia</title>
</head>
<body class="bg-black text-gray-100">
  <?php include"includes/nav.php"; ?>
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-3xl md:text-4xl font-bold text-center mb-2">Project Cost Estimator</h1>
        <p class="text-lg text-gray-400 text-center mb-12 max-w-2xl mx-auto">
            Get an instant estimate for your project. Answer a few questions and we'll calculate the cost.
        </p>

<form action="save-quote.php" method="POST" id="multiStepForm" class="max-w-2xl mx-auto bg-gray-900 p-6 rounded-xl text-white space-y-8">

    <!-- Step 1: Project Type -->
    <div class="form-step" id="step-1">
        <h2 class="text-2xl font-semibold mb-4">1. What type of project?</h2>
        <div class="space-y-4">
            <label class="block">
                <input type="radio" name="project_type" value="website" required> Website
            </label>
            <label class="block">
                <input type="radio" name="project_type" value="mobile-app"> Mobile App
            </label>
        </div>
        <div class="flex justify-end">
            <button type="button" class="next-step px-4 py-2 bg-indigo-600 rounded">Next</button>
        </div>
    </div>

    <!-- Step 2: Project Details -->
    <div class="form-step hidden" id="step-2">
        <h2 class="text-2xl font-semibold mb-4">2. Project Details</h2>
        <label class="block mb-4">
            Type of site/app:
            <select name="detail_type" required class="mt-1 w-full bg-gray-800 rounded px-4 py-2">
                <option value="basic">Basic</option>
                <option value="ecommerce">E-commerce</option>
                <option value="portfolio">Portfolio</option>
            </select>
        </label>
        <label class="block">
            Number of pages:
            <input type="number" name="pages" min="1" class="w-full bg-gray-800 rounded px-4 py-2 mt-1" required>
        </label>
        <div class="flex justify-between mt-6">
            <button type="button" class="prev-step px-4 py-2 border border-gray-500 rounded">Back</button>
            <button type="button" class="next-step px-4 py-2 bg-indigo-600 rounded">Next</button>
        </div>
    </div>

    <!-- Step 3: Features -->
    <div class="form-step hidden" id="step-3">
        <h2 class="text-2xl font-semibold mb-4">3. Select Features</h2>
        <label class="block">
            <input type="checkbox" name="features[]" value="seo"> SEO Optimization
        </label>
        <label class="block">
            <input type="checkbox" name="features[]" value="cms"> CMS (Content Management)
        </label>
        <label class="block">
            <input type="checkbox" name="features[]" value="analytics"> Analytics Integration
        </label>
        <div class="flex justify-between mt-6">
            <button type="button" class="prev-step px-4 py-2 border border-gray-500 rounded">Back</button>
            <button type="button" class="next-step px-4 py-2 bg-indigo-600 rounded">Next</button>
        </div>
    </div>

    <!-- Step 4: Contact Info -->
    <div class="form-step hidden" id="step-4">
        <h2 class="text-2xl font-semibold mb-4">4. Contact Info</h2>
        <input type="text" name="name" placeholder="Your Name" required class="w-full mb-4 bg-gray-800 px-4 py-2 rounded">
        <input type="email" name="email" placeholder="Email Address" required class="w-full mb-4 bg-gray-800 px-4 py-2 rounded">
        <textarea name="notes" placeholder="Anything else?" class="w-full bg-gray-800 px-4 py-2 rounded"></textarea>
        <div class="flex justify-between mt-6">
            <button type="button" class="prev-step px-4 py-2 border border-gray-500 rounded">Back</button>
            <button type="submit" class="px-6 py-3 bg-green-600 rounded">Submit</button>
        </div>
    </div>

</form>
    </div>
<script>
const steps = document.querySelectorAll('.form-step');
let currentStep = 0;
showStep(currentStep);

document.querySelectorAll('.next-step').forEach(btn =>
  btn.addEventListener('click', () => {
    if (currentStep < steps.length - 1) {
      currentStep++;
      showStep(currentStep);
    }
  })
);

document.querySelectorAll('.prev-step').forEach(btn =>
  btn.addEventListener('click', () => {
    if (currentStep > 0) {
      currentStep--;
      showStep(currentStep);
    }
  })
);

function showStep(index) {
  steps.forEach((step, i) => {
    step.classList.toggle('hidden', i !== index);
  });
}

// 👉 Final Submit Button Handler
document.querySelector('#submitEstimate').addEventListener('click', async () => {
  const data = {
    estimate_id: 'est_' + Date.now(), // Unique ID
    project_type: document.querySelector('input[name="project_type"]:checked')?.value || '',
    detail_type: document.querySelector('select[name="detail_type"]').value,
    pages: parseInt(document.querySelector('input[name="pages"]').value) || 0,
    features: Array.from(document.querySelectorAll('input[name="features[]"]:checked')).map(cb => cb.value),
    contact_info: {
      name: document.querySelector('input[name="name"]').value.trim(),
      email: document.querySelector('input[name="email"]').value.trim(),
      notes: document.querySelector('textarea[name="notes"]').value.trim()
    }
  };

  // Basic client-side validation
  if (!data.project_type || !data.contact_info.name || !data.contact_info.email) {
    alert("Please fill in required fields.");
    return;
  }

  try {
    const res = await fetch('save-quote.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(data)
    });

    const result = await res.json();

    if (result.success) {
      alert("✅ Quote saved successfully! ID: " + result.estimate_id);
      // Optionally redirect or reset form
    } else {
      alert("❌ Failed: " + result.message);
    }
  } catch (err) {
    alert("⚠️ Error submitting quote.");
    console.error(err);
  }
});
</script>
  <?php include"includes/footer.php"; ?>
    </body>
    </html>