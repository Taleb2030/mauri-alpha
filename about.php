<?php
$page_title = "About";
include 'includes/header.php';
?>

<section class="section">
    <div class="container">
        <h1 class="section-title"><?php echo t('about_title'); ?></h1>
        <p class="section-subtitle"><?php echo t('about_subtitle'); ?></p>
        
        <div class="about-content">
            <div class="about-text">
                <h3><?php echo t('about_who'); ?></h3>
                <p><?php echo t('about_who_text'); ?></p>
            </div>
            
            <div class="about-text">
                <h3><?php echo t('about_mission'); ?></h3>
                <p><?php echo t('about_mission_text'); ?></p>
                
                <h3 style="margin-top: 2rem;"><?php echo t('about_values'); ?></h3>
                <ul>
                    <li><strong><?php echo t('about_value_quality'); ?>:</strong> <?php echo t('about_value_quality_text'); ?></li>
                    <li><strong><?php echo t('about_value_innovation'); ?>:</strong> <?php echo t('about_value_innovation_text'); ?></li>
                    <li><strong><?php echo t('about_value_collaboration'); ?>:</strong> <?php echo t('about_value_collaboration_text'); ?></li>
                </ul>
            </div>
        </div>
        
        <div class="team-section" style="margin-top: 4rem;">
            <h2 class="section-title" style="font-size: 2rem;"><?php echo t('about_team'); ?></h2>
            <p class="section-subtitle"><?php echo t('about_team_subtitle'); ?></p>
            
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-avatar">
                        <div class="avatar-icon">
                            <img src="assets/images/Taleb.jpg" alt="Taleb Chrif">
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Taleb Chrif</h3>
                        <p class="team-role"><?php echo t('team_frontend'); ?></p>
                        <p class="team-description"><?php echo t('team_taleb_desc'); ?></p>
                        <div class="team-skills">
                            <span class="skill-tag">HTML5</span>
                            <span class="skill-tag">CSS3</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">UI/UX</span>
                        </div>
                    </div>
                </div>
                
                <div class="team-card">
                    <div class="team-avatar">
                        <div class="avatar-icon">👨‍💼</div>
                    </div>
                    <div class="team-info">
                        <h3>Ali Beyah</h3>
                        <p class="team-role"><?php echo t('team_backend'); ?></p>
                        <p class="team-description"><?php echo t('team_ali_desc'); ?></p>
                        <div class="team-skills">
                            <span class="skill-tag">PHP</span>
                            <span class="skill-tag">MySQL</span>
                            <span class="skill-tag">REST API</span>
                            <span class="skill-tag">Security</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="margin-top: 4rem;">
            <h2 class="section-title" style="font-size: 2rem;"><?php echo t('about_technologies'); ?></h2>
            <p class="section-subtitle"><?php echo t('about_technologies_subtitle'); ?></p>
            
            <div class="skills-grid">
                <div class="skill-item">
                    <h4>Frontend</h4>
                    <p>HTML5, CSS3, JavaScript</p>
                </div>
                <div class="skill-item">
                    <h4>Backend</h4>
                    <p>PHP, Node.js, Python</p>
                </div>
                <div class="skill-item">
                    <h4>Databases</h4>
                    <p>MySQL, PostgreSQL, MongoDB</p>
                </div>
                <div class="skill-item">
                    <h4>Tools & Frameworks</h4>
                    <p>Git, REST APIs, Web Services</p>
                </div>
                <div class="skill-item">
                    <h4>DevOps</h4>
                    <p>CI/CD, Cloud Deployment</p>
                </div>
                <div class="skill-item">
                    <h4>Design</h4>
                    <p>Responsive Design, UI/UX</p>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 4rem;">
            <h2 style="font-size: 2rem; margin-bottom: 1rem;"><?php echo t('about_work_together'); ?></h2>
            <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                <?php echo t('about_work_together_text'); ?>
            </p>
            <a href="contact.php" class="btn btn-primary"><?php echo t('about_contact_button'); ?></a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
