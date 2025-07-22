<?php include "includes/pdo.php";
error_reporting(0);
?>
<nav class="bg-dark-light/90 backdrop-blur-md border-b border-secondary-dark/20 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo/Brand -->
            <div class="flex-shrink-0 flex items-center">
                <a href="index.php" class="flex items-center space-x-3 group">
<div class="w-10 h-10 rounded-xl overflow-hidden bg-gradient-to-br from-primary-light to-secondary-light p-[2px] group-hover:rotate-6 transition-transform duration-300 shadow-lg">
    <picture>
        <source srcset="/assets/logo.jpg" type="image/webp" />
        <img 
            src="/assets/logo.jpg" 
            alt="Lumia Logo" 
            width="40" 
            height="40" 
            loading="lazy" 
            decoding="async"
            class="w-full h-full object-cover rounded-[0.6rem]"
        />
    </picture>
</div>
                    <span class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-light to-secondary-light tracking-tight">LUMIA</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-1">
                <?php
                $navItems = [
                    'Home' => 'index.php',
                    'Services' => 'services.php',
                    'Work' => 'projects.php',
                    'About' => 'about.php',               'Team' => 'team.php',
                    'Contact' => 'contact.php'
                ];
                
                $currentPage = basename($_SERVER['PHP_SELF']);
                
                foreach ($navItems as $name => $link) {
                    $isActive = ($currentPage === $link) ? 'text-secondary-light font-medium' : 'text-gray-300 hover:text-white';
                    echo "<a href='$link' class='px-3 py-2 rounded-md text-sm $isActive transition-colors duration-300 flex items-center'>
                            <span class='relative'>
                                $name
                                ".($isActive ? "<span class='absolute -bottom-1 left-0 w-full h-0.5 bg-secondary-light animate-pulse'></span>" : "")."
                            </span>
                          </a>";
                }
                ?>
            </div>

            <!-- CTAs and Mobile Menu Button -->
            <div class="flex items-center space-x-3">
                <a href="quote.php" class="hidden md:inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark shadow-lg hover:shadow-secondary-light/30 transition-all duration-300">
                    Get Started
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>

                <!-- Mobile menu button -->
                <button id="mobile-menu-button" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-secondary-light">
                    <span class="sr-only">Open main menu</span>
                    <svg id="menu-icon-open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="menu-icon-close" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Left-Sided Mobile Navigation -->
<div id="mobile-side-nav" class="fixed inset-y-0 left-0 w-64 bg-dark-light/95 backdrop-blur-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50 shadow-2xl border-r border-secondary-dark/20">
    <div class="flex justify-between items-center p-4 border-b border-gray-800">
        <div class="flex items-center space-x-3">
<div class="w-10 h-10 rounded-xl overflow-hidden bg-gradient-to-br from-primary-light to-secondary-light p-[2px] group-hover:rotate-6 transition-transform duration-300 shadow-lg">
    <picture>
        <source srcset="/assets/logo.jpg" type="image/webp" />
        <img 
            src="/assets/logo.jpg" 
            alt="Lumia Logo" 
            width="40" 
            height="40" 
            loading="lazy" 
            decoding="async"
            class="w-full h-full object-cover rounded-[0.6rem]"
        />
    </picture>
</div>
            <span class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-light to-secondary-light tracking-tight">LUMIA</span>
        </div>
        <button id="close-side-nav" class="p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    
    <div class="px-6 py-4 h-[calc(100%-72px)] overflow-y-auto">
        <div class="mt-4 space-y-3">
            <?php
            foreach ($navItems as $name => $link) {
                $isActive = ($currentPage === $link) ? 'text-white bg-gray-800/50' : 'text-gray-300 hover:text-white hover:bg-gray-800/30';
                echo "<a href='$link' class='block px-4 py-3 rounded-lg text-lg font-medium $isActive transition-all duration-300 flex items-center group'>
                        <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5 mr-3 text-secondary-light opacity-70' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 5l7 7-7 7' />
                        </svg>
                        <span>$name</span>
                      </a>";
            }
            ?>
            
            <div class="absolute bottom-6 left-0 right-0 px-6">
                <a href="quote.php" class="block w-full px-4 py-3 rounded-lg text-lg font-medium text-center text-white bg-gradient-to-r from-primary-light to-secondary-light hover:from-primary-dark hover:to-secondary-dark shadow-lg transition-all duration-300">
                    Get Started
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Overlay -->
<div id="nav-overlay" class="fixed inset-0 bg-black/50 z-40 opacity-0 pointer-events-none transition-opacity duration-300"></div>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeSideNav = document.getElementById('close-side-nav');
    const mobileSideNav = document.getElementById('mobile-side-nav');
    const navOverlay = document.getElementById('nav-overlay');
    const menuIconOpen = document.getElementById('menu-icon-open');
    const menuIconClose = document.getElementById('menu-icon-close');

    function toggleSideNav() {
        const isOpen = mobileSideNav.classList.contains('translate-x-0');
        
        if (isOpen) {
            // Close nav
            mobileSideNav.classList.remove('translate-x-0');
            mobileSideNav.classList.add('-translate-x-full');
            navOverlay.classList.remove('opacity-100', 'pointer-events-auto');
            navOverlay.classList.add('opacity-0', 'pointer-events-none');
            menuIconOpen.classList.remove('hidden');
            menuIconClose.classList.add('hidden');
        } else {
            // Open nav
            mobileSideNav.classList.remove('-translate-x-full');
            mobileSideNav.classList.add('translate-x-0');
            navOverlay.classList.remove('opacity-0', 'pointer-events-none');
            navOverlay.classList.add('opacity-100', 'pointer-events-auto');
            menuIconOpen.classList.add('hidden');
            menuIconClose.classList.remove('hidden');
        }
    }

    // Toggle with button clicks
    mobileMenuButton.addEventListener('click', toggleSideNav);
    closeSideNav.addEventListener('click', toggleSideNav);
    navOverlay.addEventListener('click', toggleSideNav);

    // Close when clicking links
    document.querySelectorAll('#mobile-side-nav a').forEach(link => {
        link.addEventListener('click', toggleSideNav);
    });

    // Close with ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileSideNav.classList.contains('translate-x-0')) {
            toggleSideNav();
        }
    });
</script>

<!-- Overlay -->
<div id="nav-overlay" class="fixed inset-0 bg-black/50 z-40 opacity-0 pointer-events-none transition-opacity duration-300"></div>