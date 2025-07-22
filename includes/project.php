<?php
// Fetch projects from the database
try {
    $stmt = $pdo->query("SELECT * FROM projects ORDER BY id DESC");
    $projects = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error fetching projects: " . $e->getMessage());
}

// Limit projects to 3 if not on projects.php
$page = basename($_SERVER['PHP_SELF']);
if ($page !== 'projects.php') {
    $projects = array_slice($projects, 0, 3);
}
?>
<!-- Portfolio Section -->
<section class="bg-dark-light py-20 px-4">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-white mb-4">
            Recent <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light to-secondary-light">Projects</span>
        </h2>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">
            See how we’ve helped our clients solve complex problems with smart digital solutions.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <?php if (!empty($projects)): ?>
            <?php foreach ($projects as $project): ?>
                <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 border border-gray-800 group">
                    <div class="relative aspect-video overflow-hidden">
                        <?php if (!empty($project['image_url'])): ?>
                            <img src="<?= htmlspecialchars($project['image_url']) ?>"
                                 alt="<?= htmlspecialchars($project['title']) ?>"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center text-gray-500 text-lg">
                                No Image
                            </div>
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-4">
                            <a href="<?= htmlspecialchars($project['project_link']) ?>" target="_blank"
                               class="text-white font-semibold text-base flex items-center gap-2 hover:text-secondary-light">
                                View Project
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white mb-2"><?= htmlspecialchars($project['title']) ?></h3>
                        <p class="text-gray-400 text-sm leading-relaxed"><?= htmlspecialchars($project['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-span-full text-center text-gray-400 text-xl py-12">
                No projects available right now.
            </div>
        <?php endif; ?>
    </div>

    <?php if (basename($_SERVER['PHP_SELF']) != 'projects.php'): ?>
        <!-- CTA Button -->
        <div class="text-center mt-16">
            <a href="projects.php"
               class="inline-flex items-center px-6 py-3 text-white font-medium bg-gradient-to-r from-primary-light to-secondary-light rounded-md hover:from-primary-dark hover:to-secondary-dark transition">
                See Full Portfolio
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>
    <?php endif; ?>
</section>