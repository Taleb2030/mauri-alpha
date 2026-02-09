<?php
$page_title = "Projects";
include 'includes/header.php';
?>

<section class="section">
    <div class="container">
        <h1 class="section-title"><?php echo t('projects_title'); ?></h1>
        <p class="section-subtitle"><?php echo t('projects_subtitle'); ?></p>
        
        <div class="project-grid">
            <div class="project-card">
                <div class="project-image">🌐</div>
                <div class="project-content">
                    <h3><?php echo t('project_corporate'); ?></h3>
                    <p><?php echo t('project_corporate_desc'); ?></p>
                    <div class="project-tech">
                        <span class="tech-badge">HTML5</span>
                        <span class="tech-badge">CSS3</span>
                        <span class="tech-badge">PHP</span>
                    </div>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">📊</div>
                <div class="project-content">
                    <h3><?php echo t('project_analytics'); ?></h3>
                    <p><?php echo t('project_analytics_desc'); ?></p>
                    <div class="project-tech">
                        <span class="tech-badge">JavaScript</span>
                        <span class="tech-badge">PHP</span>
                        <span class="tech-badge">MySQL</span>
                    </div>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">🛒</div>
                <div class="project-content">
                    <h3>E-Commerce Platform</h3>
                    <p>
                        A full-featured online store with product management, shopping cart, payment 
                        integration, and order tracking.
                    </p>
                    <div class="project-tech">
                        <span class="tech-badge">PHP</span>
                        <span class="tech-badge">MySQL</span>
                        <span class="tech-badge">REST API</span>
                    </div>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">📱</div>
                <div class="project-content">
                    <h3>Content Management System</h3>
                    <p>
                        A custom CMS solution that allows clients to easily manage their website content 
                        with an intuitive admin interface.
                    </p>
                    <div class="project-tech">
                        <span class="tech-badge">PHP</span>
                        <span class="tech-badge">MySQL</span>
                        <span class="tech-badge">JavaScript</span>
                    </div>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">🔐</div>
                <div class="project-content">
                    <h3>Secure API Backend</h3>
                    <p>
                        A robust backend system with authentication, authorization, and secure API endpoints 
                        for a mobile application.
                    </p>
                    <div class="project-tech">
                        <span class="tech-badge">PHP</span>
                        <span class="tech-badge">REST API</span>
                        <span class="tech-badge">Security</span>
                    </div>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">💼</div>
                <div class="project-content">
                    <h3>Portfolio Website</h3>
                    <p>
                        A sleek portfolio website for a creative professional featuring project showcases, 
                        contact forms, and smooth animations.
                    </p>
                    <div class="project-tech">
                        <span class="tech-badge">HTML5</span>
                        <span class="tech-badge">CSS3</span>
                        <span class="tech-badge">JavaScript</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 4rem;">
            <h2 style="font-size: 2rem; margin-bottom: 1rem;">Have a Project in Mind?</h2>
            <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                Let's discuss how we can help bring your next project to life.
            </p>
            <a href="contact.php" class="btn btn-primary">Start a Project</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
