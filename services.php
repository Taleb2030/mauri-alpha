<?php
$page_title = "Services";
include 'includes/header.php';
?>

<section class="section">
    <div class="container">
        <h1 class="section-title"><?php echo t('services_title'); ?></h1>
        <p class="section-subtitle"><?php echo t('services_subtitle'); ?></p>
        
        <div id="website" class="service-item">
            <h3><?php echo t('service_website'); ?></h3>
            <p><?php echo t('service_website_detail'); ?></p>
            <p>
                <strong><?php echo t('service_website_deliver'); ?></strong> <?php echo t('service_website_deliver_items'); ?>
            </p>
        </div>
        
        <div id="webapp" class="service-item">
            <h3><?php echo t('service_webapp'); ?></h3>
            <p><?php echo t('service_webapp_detail'); ?></p>
            <p>
                <strong><?php echo t('service_webapp_deliver'); ?></strong> <?php echo t('service_webapp_deliver_items'); ?>
            </p>
        </div>
        
        <div id="backend" class="service-item">
            <h3><?php echo t('service_backend'); ?></h3>
            <p><?php echo t('service_backend_detail'); ?></p>
            <p>
                <strong><?php echo t('service_backend_deliver'); ?></strong> <?php echo t('service_backend_deliver_items'); ?>
            </p>
        </div>
        
        <div id="maintenance" class="service-item">
            <h3><?php echo t('service_maintenance'); ?></h3>
            <p><?php echo t('service_maintenance_detail'); ?></p>
            <p>
                <strong><?php echo t('service_maintenance_deliver'); ?></strong> <?php echo t('service_maintenance_deliver_items'); ?>
            </p>
        </div>
        
        <div style="text-align: center; margin-top: 4rem; padding: 3rem; background-color: var(--bg-card); border-radius: 10px; border: 1px solid var(--border-color);">
            <h2 style="font-size: 2rem; margin-bottom: 1rem;"><?php echo t('service_cta_title'); ?></h2>
            <p style="color: var(--text-secondary); margin-bottom: 2rem; font-size: 1.1rem;">
                <?php echo t('service_cta_text'); ?>
            </p>
            <a href="contact.php" class="btn btn-primary"><?php echo t('service_cta_button'); ?></a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
