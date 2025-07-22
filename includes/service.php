<!-- === SERVICES SECTION === -->
<section class="bg-black py-24">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                What We <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light to-secondary-light">Offer</span>
            </h2>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                Solutions designed to accelerate your growth through technology, design, and strategy.
            </p>
        </div>

        <!-- Services Data -->
        <?php
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Custom-built websites and platforms optimized for speed, SEO, and scalability.',
                'icon' => '<path d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2H3V4zm0 4h18v10a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm5 4v2h2v-2H8zm4 0v2h2v-2h-2z" />'
            ],
            [
                'title' => 'Mobile Apps',
                'description' => 'iOS and Android apps built with Flutter, React Native, or native code.',
                'icon' => '<path d="M7 2a1 1 0 00-1 1v18a1 1 0 001 1h10a1 1 0 001-1V3a1 1 0 00-1-1H7zm5 18a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" />'
            ],
            [
                'title' => 'API Development',
                'description' => 'Secure, scalable REST & GraphQL APIs to power your frontend and third-party integrations.',
                'icon' => '<path d="M4 13h16v-2H4v2zm0 4h10v-2H4v2zm0-8h16V7H4v2z" />'
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'Modern, human-centered design that delights users and drives engagement.',
                'icon' => '<path d="M4 6h16M4 12h16M4 18h16" />'
            ],
            [
                'title' => 'Cloud Deployment',
                'description' => 'We handle DevOps, CI/CD, and cloud architecture across AWS, Azure, and GCP.',
                'icon' => '<path d="M3 15a4 4 0 004 4h10a4 4 0 100-8 4.01 4.01 0 00-7.9-1H7a4 4 0 00-4 4z" />'
            ],
            [
                'title' => 'E-Commerce Solutions',
                'description' => 'Fully integrated online stores with inventory, payments, and custom logic.',
                'icon' => '<path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7a1 1 0 00.9 1.3H19" />'
            ]
        ];
        ?>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php foreach ($services as $service): ?>
                <div class="group bg-gray-900 rounded-2xl p-8 border border-gray-800 hover:border-secondary-light transition-all duration-300 shadow-lg hover:shadow-xl">
                    <div class="w-12 h-12 mb-6 flex items-center justify-center rounded-xl bg-gradient-to-br from-primary-light/20 to-secondary-light/20">
                        <svg class="w-6 h-6 text-secondary-light" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <?= $service['icon'] ?>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-secondary-light transition-colors duration-200">
                        <?= $service['title'] ?>
                    </h3>
                    <p class="text-gray-400 leading-relaxed">
                        <?= $service['description'] ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- CTA if not on services.php -->
        <?php if (basename($_SERVER['PHP_SELF']) != 'services.php'): ?>
            <div class="text-center mt-16">
                <a href="services.php" class="inline-flex items-center px-6 py-3 rounded-lg font-semibold bg-gradient-to-r from-primary-light to-secondary-light text-white hover:from-primary-dark hover:to-secondary-dark transition-all duration-200">
                    View Full Services
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 010-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>