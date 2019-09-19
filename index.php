<?php include('includes/_header.php'); ?>

<body>
    <!-- Header -->
    <header id="header-home" class="overlay">
        <div class="container">
            <!-- Main Navbar-->
            <?php include('includes/_navbar.php'); ?>
            <div class="header-content">
                <h1>
                    JC
                    <span class="txt-type text-primary" data-wait="3000"
                        data-words='["Dog Grooming", "Dog Washing", "Hydro Bathing"]'>
                    </span>
                </h1>
                <p class="lead">Specializing in small to medium sized dogs</p>
            </div>
        </div>
    </header>

    <!-- Section A: Specialize Services -->
    <section class="text-center py-2" id="home-a">
        <div class="container">
            <h2 class="section-title">I specialize In</h2>
            <div class="bottom-line"></div>
            <p class="lead">
                Dog Grooming, Dog Clipping, and the latest technology Hydro Bathing
            </p>
            <div class="specials">
                <div>
                    <i class="fas fa-paw fa-2x"></i>
                    <h3>Dog Washing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, consectetur a mollitia
                        autem
                        recusandae nisi neque error dignissimos quia similique.</p>
                </div>
                <div>
                    <i class="fas fa-paw fa-2x"></i>
                    <h3>Dog Grooming</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, consectetur a mollitia
                        autem
                        recusandae nisi neque error dignissimos quia similique.</p>
                </div>
                <div>
                    <i class="fas fa-paw fa-2x"></i>
                    <h3>Hydro Bathing </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, consectetur a mollitia
                        autem
                        recusandae nisi neque error dignissimos quia similique.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Footer -->
    <?php include('includes/_footer.php'); ?>
</body>

</html>