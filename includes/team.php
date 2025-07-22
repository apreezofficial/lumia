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
            $currentPage = basename($_SERVER['PHP_SELF']);
            $isTeamPage = $currentPage === 'team.php';

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
                    'description' => 'Drives Lumia’s backend power with expert Laravel architecture, blazing-fast APIs, and rock-solid performance.',
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
    'name' => 'Christian IRENGE NAMUHUSA',
    'role' => 'Chief Technology Officer (CTO)',
    'country' => 'Democratic Republic of Congo',
    'flag' => 'https://flagcdn.com/cd.svg',
    'image' => 'https://media.licdn.com/dms/image/v2/D4D03AQHeAP9PqkbwnQ/profile-displayphoto-shrink_200_200/B4DZdlqiIOHAAY-/0/1749757340500?e=2147483647&v=beta&t=bVPUDjClKhF8YANS4BwQl2temTGUA1kqsY6LdqDCmv4',
    'description' => 'Oversees the technical direction of the company, leading the development team and ensuring the use of modern, scalable technologies.',
    'color' => 'navy',
    'linkedin' => 'https://www.linkedin.com/in/christian-irenge-11b542268?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app',
    
],
[
    'name' => 'Nathan Birhindwa',
    'role' => 'Fullstack Engineer (Web, Mobile, Desktop, Backend)',
    'country' => 'Uganda',
    'flag' => 'https://flagcdn.com/ug.svg',
    'image' => 'https://lumiatech.dev/assets/nathan.jpg', // replace with your actual image URL
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
    'image' => 'https://lumiatech.dev/assets/faraja.jpg',
    'description' => 'Focuses on responsive UI/UX using React, Tailwind, and modern frontend tools.',
    'color' => 'green',
    'linkedin' => '#linkedin.com/farajamaha',
    'github' => '#github.com/mahafaraja',
    'portfolio' => '#'
],
            ];
            $visibleTeam = $isTeamPage ? $team : array_slice($team, 0, 3);

            foreach ($visibleTeam as $member) {
                $gradient = match ($member['color']) {
                    'blue' => 'from-blue-900/20 to-blue-700/10',
                    'pink' => 'from-pink-900/20 to-pink-700/10',
                    'purple' => 'from-purple-900/20 to-purple-700/10',
                    'emerald' => 'from-emerald-900/20 to-teal-700/10',
                    'orange' => 'from-orange-900/20 to-orange-700/10',
                    'indigo' => 'from-indigo-900/20 to-indigo-700/10',
                    'red' => 'from-red-900/20 to-orange-700/10',
                    'yellow' => 'from-yellow-900/20 to-yellow-600/10',
                    'crimpson' => 'from-lime-800/20 to-green-700/10',
                    default => 'from-slate-800/20 to-slate-700/10',
                };

                $hoverColor = 'hover:text-white';
            ?>
                <div class="bg-gray-800/60 rounded-xl overflow-hidden border border-gray-700 hover:border-secondary-light transition-all duration-300 group">
                    <!-- Dynamic Gradient BG -->
                    <div class="h-64 bg-gradient-to-br <?= $gradient ?> flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-10 bg-[url('https://grainy-gradients.vercel.app/noise.svg')]"></div>
                        <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>" class="w-40 h-40 rounded-full object-cover border-4 border-gray-900 z-10 transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold text-white mb-1"><?= $member['name'] ?></h3>
                        <p class="text-sm text-gray-400 italic mb-2"><?= $member['role'] ?></p>
                        <div class="flex items-center justify-center mb-4">
                            <img src="<?= $member['flag'] ?>" alt="<?= $member['country'] ?>" class="w-5 h-3 mr-2 rounded-sm">
                            <span class="text-gray-400 text-sm"><?= $member['country'] ?></span>
                        </div>
                        <p class="text-gray-300 text-sm mb-4"><?= $member['description'] ?></p>
                        <div class="flex justify-center space-x-4 text-lg">
                            <?php if (!empty($member['portfolio'])): ?>
                                <a href="<?= $member['portfolio'] ?>" target="_blank" class="text-gray-400 <?= $hoverColor ?>" aria-label="Portfolio">🧑‍💻</a>
                            <?php endif; ?>
                            <?php if (!empty($member['linkedin'])): ?>
                                <a href="<?= $member['linkedin'] ?>" target="_blank" class="text-gray-400 <?= $hoverColor ?>" aria-label="LinkedIn">💼</a>
                            <?php endif; ?>
                            <?php if (!empty($member['github'])): ?>
                                <a href="<?= $member['github'] ?>" target="_blank" class="text-gray-400 <?= $hoverColor ?>" aria-label="GitHub">🐙</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- CTA Button -->
        <?php if (!$isTeamPage): ?>
            <div class="text-center mt-12">
                <a href="team.php" class="inline-block px-6 py-3 bg-gradient-to-r from-primary-light to-secondary-light text-white font-semibold rounded-xl shadow-lg hover:scale-105 transition transform duration-300">
                    Meet the Full Team →
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>