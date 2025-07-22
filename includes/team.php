<!-- === ENHANCED TEAM SECTION === -->
<section class="py-20 bg-dark-light">
    <div class="container mx-auto px-5">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Meet Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light to-secondary-light">Team</span>
            </h2>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                The brilliant minds behind Lumia's innovative solutions from around the globe.
            </p>
        </div>

        <!-- Team Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            // Team Members Array
            $team = [
              [
    'name' => 'Eddy Kamole',
    'role' => 'CEO & Lead Fullstack Developer',
    'country' => 'Democratic Republic of the Congo',
    'flag' => 'https://flagcdn.com/cd.svg',
    'image' => 'https://avatars.githubusercontent.com/u/156857641?v=4',
    'description' => 'Founder of Lumia Tech Solutions. Expert in React, Node.js, TypeScript, Next.js, Flutter, React Native, Desktop Apps, and Golang. Leads product strategy and engineering vision.',
    'color' => 'purple',
    'linkedin' => 'https://www.linkedin.com/in/eddy-kamole-28aaa6288/',
    'github' => 'https://github.com/EdouardKamole',
    'portfolio' => 'https://edouardkamole.github.io/eddy-kamole-portfolio/'
],
                [
                    'name' => 'Precious Adedokun',
                    'role' => 'Lead PHP Developer',
                    'country' => 'Nigeria',
                    'flag' => 'https://flagcdn.com/ng.svg',
                    'image' => 'https://media2.dev.to/dynamic/image/width=320,height=320,fit=cover,gravity=auto,format=auto/https%3A%2F%2Fdev-to-uploads.s3.amazonaws.com%2Fuploads%2Fuser%2Fprofile_image%2F2856590%2F5ab16ff7-2818-4af6-9253-948bf62d2d83.jpg',
                    'description' => 'Specializes in Laravel architecture and high-performance backend systems.',
                    'color' => 'blue',
                    'linkedin' => '#',
                    'github' => 'https://github.com/apreezofficial',
                    'portfolio' => 'https://preciousadedokun.com.ng'
                ],
                [
    'name' => 'Livingstone Ndigezza',
    'role' => 'Head of Sales, Marketing & Research',
    'country' => 'Uganda',
    'flag' => 'https://flagcdn.com/ug.svg',
    'image' => 'https://livingstonportfolio.netlify.app/images/livingston1.jpeg',
    'description' => 'Leads marketing strategy, sales growth, and research initiatives. Drives company outreach and secures deals to expand Lumia Tech Solutions’ market presence.',
    'color' => 'pink',
    'linkedin' => 'https://www.linkedin.com/in/livingstone-ndigezza-87a87412b/?originalSubdomain=ug',
    'github' => '',
    'portfolio' => 'https://livingstonportfolio.netlify.app/'
],
[
    'name' => 'Nathan Birhindwa',
    'role' => 'Fullstack Engineer (Web, Mobile, Desktop, Backend)',
    'country' => 'Uganda',
    'flag' => 'https://flagcdn.com/ug.svg',
    'image' => 'https://your-image-link.jpg', // replace with your actual image URL
    'description' => 'Versatile developer building modern apps across web, mobile, and desktop platforms. Skilled in backend engineering, modern UI, and cross-platform systems.',
    'color' => 'orange',
    'linkedin' => 'https://www.linkedin.com/in/nathan-birhindwa', // update if needed
    'github' => 'https://github.com/Nathan-Birindwa',
    'portfolio' => 'https://your-portfolio-link.com' // replace with your actual portfolio link
],
[
    'name' => 'Bin Salomon',
    'role' => 'Backend Developer (PHP & C++)',
    'country' => 'Democratic Republic of the Congo',
    'flag' => 'https://flagcdn.com/cd.svg',
    'image' => 'https://avatars.githubusercontent.com/u/180022324?v=4',
    'description' => 'Experienced in modern PHP frameworks and advanced C++ development. Builds secure, optimized backend systems.',
    'color' => 'indigo',
    'linkedin' => 'https://ug.linkedin.com/in/bin-salomon-708357348',
    'github' => 'https://github.com/Binsalomon',
    'portfolio' => '#'
],
[
    'name' => 'Aghahowa Uyiosa',
    'role' => 'Head of Engineering & Fullstack Developer',
    'country' => 'Nigeria',
    'flag' => 'https://flagcdn.com/ng.svg',
    'image' => 'https://www.nairaland.com/attachments/19346481_img20250614wa0002_jpeg3cc9d8cf36a870d7dd22571906675151',
    'description' => 'Highly skilled in React, Node.js, Next.js, TypeScript, Flutter, and React Native. Leads engineering teams and drives development across web and mobile platforms.',
    'color' => 'red',
    'linkedin' => 'https://www.linkedin.com/in/osamudiamen-aghahowa-2a8b73237?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app',
    'github' => 'https://github.com/Uyiosa2607',
    'portfolio' => 'https://osaswebdev.vercel.app'
],
[
    'name' => 'Bin Salomon',
    'role' => 'Backend Developer (PHP & C++)',
    'country' => 'Democratic Republic of the Congo',
    'flag' => 'https://flagcdn.com/cd.svg',
    'image' => 'https://avatars.githubusercontent.com/u/180022324?v=4',
    'description' => 'Experienced in modern PHP frameworks and advanced C++ development. Builds secure, optimized backend systems.',
    'color' => 'yellow',
    'linkedin' => 'https://ug.linkedin.com/in/bin-salomon-708357348',
    'github' => 'https://github.com/Binsalomon',
    'portfolio' => '#'
],
[
    'name' => 'Vicky Ciza',
    'role' => 'Sales & Marketing Executive',
    'country' => 'Democratic Republic of the Congo',
    'flag' => 'https://flagcdn.com/cd.svg',
    'image' => 'https://media.licdn.com/dms/image/v2/D4D03AQGBjdAZpRM2gw/profile-displayphoto-shrink_200_200/B4DZdqs2gLGgAY-/0/1749841835871?e=1755129600&v=beta&t=_Gk4JU6rO2hpVRDFKhzpYM6SzLeb0BynmUKG8khilZs',
    'description' => 'Key contributor to marketing strategy, lead generation, and customer engagement for company growth in African markets.',
    'color' => 'crimpson',
    'linkedin' => 'https://www.linkedin.com/in/ciza-bahati-victoire-78a8892a9/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app',
    'github' => '#',
    'portfolio' => '#'
],
[
    'name' => 'faraja maha',
    'role' => 'Frontend Developer (React, Next.js)',
    'country' => 'Uganda',
    'flag' => 'https://flagcdn.com/ug.svg', 
    'image' => 'https://your-image-link.jpg',
    'description' => 'Focuses on responsive UI/UX using React, Tailwind, and modern frontend tools.',
    'color' => 'green',
    'linkedin' => '#linkedin.com/farajamaha',
    'github' => '#github.com/mahafaraja',
    'portfolio' => '#'
],
            ];

            foreach ($team as $member) :
// Assign gradient based on color
$gradient = match ($member['color']) {
    'blue' => 'from-blue-500/10 to-blue-700/20',
    'pink' => 'from-pink-500/10 to-pink-700/20',
    'purple' => 'from-purple-500/10 to-violet-700/20',
    'emerald' => 'from-emerald-500/10 to-teal-700/20',
    'orange' => 'from-orange-400 to-orange-700/20',
    'indigo' => 'from-indigo-500/10 to-indigo-700/20',
    'red' => 'from-red-300 to-orange-700/20',
    'yellow' => 'from-yellow-200 to-yellow-700/20',
    'crimpson' => 'from-green-200 to-yellow-700/20',
    default => 'from-gray-500/10 to-gray-700/20',
};

// Assign hover color based on theme
$hoverColor = match ($member['color']) {
    'blue' => 'hover:text-blue-400',
    'pink' => 'hover:text-pink-400',
    'purple' => 'hover:text-purple-400',
    'emerald' => 'hover:text-emerald-400',
    'orange' => 'hover:text-orange-400',
    'indigo' => 'hover:text-indigo-400',
    'red' => 'hover:text-red-400',
    'yellow' => 'hover:text-yellow-400',
    'crimpson' => 'hover:text-green-400',
    default => 'hover:text-gray-400',
};

// Assign text color based on theme
$textColor = match ($member['color']) {
    'blue' => 'text-blue-400',
    'pink' => 'text-pink-400',
    'purple' => 'text-purple-400',
    'emerald' => 'text-emerald-400',
    'orange' => 'text-orange-400',
    'indigo' => 'text-indigo-400',
    'red' => 'text-red-400',
    'yellow' => 'text-yellow-400',
    'crimpson' => 'text-green-400',
    default => 'text-gray-400',
};
?>
                <div class="bg-gray-800/50 rounded-xl overflow-hidden border border-gray-700 hover:border-secondary-light transition-all duration-300 group">
                    <!-- Dynamic Gradient BG -->
                    <div class="h-64 bg-gradient-to-br <?= $gradient ?> flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-10 bg-[url('https://grainy-gradients.vercel.app/noise.svg')]"></div>
                        <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>" class="w-40 h-40 rounded-full object-cover border-4 border-gray-800 z-10 transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold text-white mb-1"><?= $member['name'] ?></h3>
                        <p class="<?= $textColor ?> mb-2"><?= $member['role'] ?></p>

                        <div class="flex items-center justify-center mb-4">
                            <img src="<?= $member['flag'] ?>" alt="<?= $member['country'] ?>" class="w-5 h-3 mr-2 rounded-sm">
                            <span class="text-gray-400 text-sm"><?= $member['country'] ?></span>
                        </div>

                        <p class="text-gray-300 text-sm mb-4">
                            <?= $member['description'] ?>
                        </p>

                        <div class="flex justify-center space-x-4">
                                                      <a href="<?= $member['portfolio'] ?>" target="_blank" class="text-gray-400 <?= $hoverColor ?> transition-colors" aria-label="Portfolio">
                                <!-- Portfolio Icon -->
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code" viewBox="0 0 16 16">
  <path d="M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8z"/>
</svg>
                            </a>
                            <a href="<?= $member['linkedin'] ?>" class="text-gray-400 <?= $hoverColor ?> transition-colors" aria-label="LinkedIn">
                                <!-- LinkedIn Icon -->
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                            <a href="<?= $member['github'] ?>" class="text-gray-400 <?= $hoverColor ?> transition-colors" aria-label="GitHub">
                                <!-- GitHub Icon -->
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>