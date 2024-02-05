<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./dist/output.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>

<body>
    <footer class="bg-gray-100 py-8 md:py-12 lg:py-16 container-full">
        <div class="px-16 flex flex-col md:flex-column">
            <div class="flex flex-wrap items-center justify-center">
                <div class="logo">
                    <a href="/">
                        <img class="w-32 h-32" src="logo/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="w-full md:w-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div>
                            <h4 class="text-black text-l">Discover</h4>
                            <a href="startup-company.php">
                                <p class="font-semibold text-2xl" style="color: #ff7a00;">Startup Companies</p>
                            </a>
                            <a href="startup-enabler.php">
                                <p class="font-semibold text-2xl" style="color: #ff7a00;">Startup Enablers</p>
                            </a>
                            <a href="guides.php">
                                <p class="font-semibold text-2xl" style="color: #ff7a00;">Guides</p>
                            </a>
                            <a href="blogs.php">
                                <p class="font-semibold text-2xl" style="color: #ff7a00;">Blogs</p>
                            </a>
                        </div>
                        <div>
                            <h4 class="text-black text-l">Contact Us</h4>
                            <ul>
                                <li class="orange-text"><a href="mailto:startwithbinno@gmail.com"><i class="fas fa-envelope"></i> startwithbinno@gmail.com</a></li>
                                <li><a href="tel:09300772463"><i class="fas fa-phone"></i> 09300772463</a></li>
                                <li><a href=""><i class="fas fa-map-marker-alt"></i> Legazpi City, Albay</a></li>
                            </ul>
                        </div>
                        <div class="newsletter mb-4">
                            <h4 class="text-black text-l">Newsletter</h4>
                            <p class="text-black text-sm">Become a part of the revolution by being up-to-date with our latest offering by startups and startup enablers!</p>
                            <form action="/subscribe" method="post" class="flex items-center">
                                <div class="relative mt-3 md:mt-0">
                                    <input type="text" placeholder="Enter your email here..." class="px-6 py-2 rounded-full border shadow-md focus:outline-none focus:ring focus:border-blue-300 md:w-full" />
                                </div>
                                <button type="submit" class="btn-subscribe ml-2">
                                    <span>Subscribe</span>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php
        $currentYear = date("Y");
        ?>

        <p class="text-black text-sm text-center py-4 md:py-5">
            Copyright &copy; <?php echo $currentYear; ?>
        </p>

    </footer>
</body>

</html>