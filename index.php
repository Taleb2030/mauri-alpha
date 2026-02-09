<?php
$page_title = "Home";
include 'includes/header.php';
?>

<section class="hero">
    <div class="hero-logo-bg">
        <img src="assets/images/Logo.png" alt="Mauri-Alpha Logo Background" class="logo-background">
    </div>
    <div class="container">
        <div class="hero-content">
            <h1><?php echo t('hero_title'); ?></h1>
            <p><?php echo t('hero_subtitle'); ?></p>
            <a href="contact.php" class="btn btn-primary"><?php echo t('hero_cta'); ?></a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="intro">
            <h2><?php echo t('welcome_title'); ?></h2>
            <p><?php echo t('welcome_text'); ?></p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title"><?php echo t('services_title'); ?></h2>
        <p class="section-subtitle"><?php echo t('services_subtitle'); ?></p>
        
        <div class="card-grid">
            <div class="card">
                <div class="card-icon">🌐</div>
                <h3><?php echo t('service_website'); ?></h3>
                <p><?php echo t('service_website_desc'); ?></p>
            </div>
            
            <div class="card">
                <div class="card-icon">⚙️</div>
                <h3><?php echo t('service_webapp'); ?></h3>
                <p><?php echo t('service_webapp_desc'); ?></p>
            </div>
            
            <div class="card">
                <div class="card-icon">🔧</div>
                <h3><?php echo t('service_backend'); ?></h3>
                <p><?php echo t('service_backend_desc'); ?></p>
            </div>
            
            <div class="card">
                <div class="card-icon">🛠️</div>
                <h3><?php echo t('service_maintenance'); ?></h3>
                <p><?php echo t('service_maintenance_desc'); ?></p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 3rem;">
            <a href="services.php" class="btn btn-secondary"><?php echo t('services_view_all'); ?></a>
        </div>
    </div>
</section>

<section class="section" style="background-color: var(--bg-card); padding: 3rem 0; border-radius: 10px;">
    <div class="container" style="text-align: center;">
        <h2 style="font-size: 2rem; margin-bottom: 1rem;"><?php echo t('cta_title'); ?></h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem; font-size: 1.1rem;">
            <?php echo t('cta_text'); ?>
        </p>
        <a href="contact.php" class="btn btn-primary"><?php echo t('cta_button'); ?></a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
