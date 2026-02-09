// Language Translation System for Static HTML
const translations = {
    'en': {
        // Navigation
        'nav_home': 'Home',
        'nav_about': 'About',
        'nav_services': 'Services',
        'nav_projects': 'Projects',
        'nav_contact': 'Contact',
        
        // Home Page
        'hero_title': 'Mauri-Alpha',
        'hero_subtitle': 'We build reliable web applications and digital solutions.',
        'hero_cta': 'Contact Us',
        'welcome_title': 'Welcome to Mauri-Alpha',
        'welcome_text': 'Mauri-Alpha is a small software engineering company dedicated to delivering high-quality web applications, custom software solutions, and digital services tailored to your business needs.',
        'services_title': 'Our Services',
        'services_subtitle': 'Comprehensive software engineering solutions tailored to your needs',
        'services_view_all': 'View All Services',
        'service_website': 'Website Development',
        'service_website_desc': 'Custom websites built with modern technologies, responsive design, and SEO optimization.',
        'service_webapp': 'Web Applications',
        'service_webapp_desc': 'Scalable web applications with modern frameworks and best practices.',
        'service_backend': 'Backend Systems',
        'service_backend_desc': 'Robust API development, database design, and server architecture.',
        'service_maintenance': 'Maintenance & Support',
        'service_maintenance_desc': 'Ongoing support, updates, and maintenance for your applications.',
        'cta_title': 'Ready to Start Your Project?',
        'cta_text': "Let's discuss how we can help bring your vision to life.",
        'cta_button': 'Get in Touch',
        
        // About Page
        'about_title': 'About Mauri-Alpha',
        'about_subtitle': 'A team of passionate software engineers dedicated to building exceptional digital solutions',
        'about_who': 'Who We Are',
        'about_who_text': 'Mauri-Alpha is a small but dedicated software engineering company that specializes in creating modern, scalable web applications and custom software solutions. We combine technical expertise with creative problem-solving to deliver solutions that drive business growth.',
        'about_mission': 'Our Mission',
        'about_mission_text': 'To empower businesses with cutting-edge technology solutions that are reliable, scalable, and user-friendly. We believe in building long-term partnerships with our clients.',
        'about_values': 'Our Values',
        'about_value_quality': 'Quality',
        'about_value_quality_text': 'We never compromise on code quality and best practices.',
        'about_value_innovation': 'Innovation',
        'about_value_innovation_text': 'We stay updated with the latest technologies and trends.',
        'about_value_collaboration': 'Collaboration',
        'about_value_collaboration_text': 'We work closely with clients to understand their needs.',
        'about_team': 'Our Team',
        'about_team_subtitle': 'Meet the talented developers behind Mauri-Alpha',
        'team_frontend': 'Front-end Developer',
        'team_backend': 'Back-end Developer',
        'team_taleb_desc': 'I am a passionate front-end developer dedicated to crafting beautiful, responsive user interfaces and seamless user experiences. I specialize in HTML5, CSS3, and modern JavaScript to transform creative designs into functional, interactive web applications.',
        'team_ali_desc': 'Focuses on building robust server-side solutions, APIs, and database architectures. Ensures security, performance, and scalability.',
        'about_technologies': 'Technologies We Use',
        'about_technologies_subtitle': 'Our expertise spans across modern web technologies',
        'about_work_together': "Let's Work Together",
        'about_work_together_text': 'Interested in learning more about how we can help your business?',
        'about_contact_button': 'Contact Us',
        
        // Services Page
        'service_website_detail': 'We create modern, responsive websites that are fast, secure, and optimized for search engines. Whether you need a simple landing page or a complex multi-page site, we build solutions that reflect your brand and engage your audience. Our websites are mobile-first, ensuring a perfect experience across all devices.',
        'service_website_deliver': 'What we deliver:',
        'service_website_deliver_items': 'Responsive design, SEO optimization, fast loading times, clean code, and easy content management.',
        'service_webapp_detail': 'Custom web applications built to solve your specific business challenges. From interactive dashboards and data visualization tools to e-commerce platforms and content management systems, we develop applications that streamline your operations and enhance productivity.',
        'service_webapp_deliver': 'What we deliver:',
        'service_webapp_deliver_items': 'Custom functionality, user authentication, data management, real-time updates, and scalable architecture.',
        'service_backend_detail': 'Robust backend infrastructure and APIs that power your applications. We design and implement secure, scalable server-side solutions that handle complex business logic, data processing, and integration with third-party services. Our backend systems are built with security and performance in mind.',
        'service_backend_deliver': 'What we deliver:',
        'service_backend_deliver_items': 'RESTful APIs, database design, server architecture, security implementation, and system integration.',
        'service_maintenance_detail': 'Keep your digital assets running smoothly with our ongoing maintenance and support services. We provide regular updates, security patches, bug fixes, and feature enhancements to ensure your systems remain current and secure. Our support team is responsive and ready to help whenever you need assistance.',
        'service_maintenance_deliver': 'What we deliver:',
        'service_maintenance_deliver_items': 'Regular updates, security monitoring, bug fixes, performance optimization, and technical support.',
        'service_cta_title': 'Ready to Get Started?',
        'service_cta_text': "Let's discuss your project requirements and how we can help bring your vision to life.",
        'service_cta_button': 'Contact Us Today',
        
        // Projects Page
        'projects_title': 'Our Projects',
        'projects_subtitle': 'Showcasing our recent work and achievements',
        'project_corporate': 'Corporate Business Website',
        'project_corporate_desc': 'A modern, responsive website for a growing business with integrated contact forms, service pages, and a clean, professional design.',
        'project_analytics': 'Analytics Dashboard',
        'project_analytics_desc': 'A comprehensive web application for data visualization and analytics, featuring real-time updates and interactive charts.',
        'project_ecommerce': 'E-Commerce Platform',
        'project_ecommerce_desc': 'A full-featured online store with product management, shopping cart, payment integration, and order tracking.',
        'project_cms': 'Content Management System',
        'project_cms_desc': 'A custom CMS solution that allows clients to easily manage their website content with an intuitive admin interface.',
        'project_api': 'Secure API Backend',
        'project_api_desc': 'A robust backend system with authentication, authorization, and secure API endpoints for a mobile application.',
        'project_portfolio': 'Portfolio Website',
        'project_portfolio_desc': 'A sleek portfolio website for a creative professional featuring project showcases, contact forms, and smooth animations.',
        'projects_cta_title': 'Have a Project in Mind?',
        'projects_cta_text': "Let's discuss how we can help bring your next project to life.",
        'projects_cta_button': 'Start a Project',
        
        // Contact Page
        'contact_title': 'Contact Us',
        'contact_subtitle': "We'd love to hear from you. Get in touch with us.",
        'contact_info': 'Contact Information',
        'contact_phone': 'Phone',
        'contact_email': 'Email',
        'contact_whatsapp': 'WhatsApp',
        'contact_telegram': 'Telegram',
        'contact_chat_whatsapp': 'Chat on WhatsApp',
        'contact_message_telegram': 'Message on Telegram',
        'contact_form_name': 'Your Name',
        'contact_form_email': 'Your Email',
        'contact_form_message': 'Your Message',
        'contact_form_submit': 'Send Message',
        'contact_why_title': 'Why Choose Mauri-Alpha?',
        'contact_success': 'Thank you for contacting us! We have received your message and will get back to you soon.',
        'contact_error': 'Sorry, there was an error sending your message. Please try again later.',
        
        // Footer
        'footer_tagline': 'Building reliable web applications and digital solutions.',
        'footer_quick_links': 'Quick Links',
        'footer_services': 'Services',
        'footer_contact': 'Contact',
        'footer_ready': 'Ready to start your project?',
        'footer_get_touch': 'Get in Touch',
        'footer_copyright': 'All rights reserved.',
        
        // Common
        'lang_switch': 'Language',
    },
    
    'ar': {
        'nav_home': 'الرئيسية',
        'nav_about': 'من نحن',
        'nav_services': 'الخدمات',
        'nav_projects': 'المشاريع',
        'nav_contact': 'اتصل بنا',
        'hero_title': 'موري-ألفا',
        'hero_subtitle': 'نقوم ببناء تطبيقات ويب موثوقة وحلول رقمية.',
        'hero_cta': 'اتصل بنا',
        'welcome_title': 'مرحباً بك في موري-ألفا',
        'welcome_text': 'موري-ألفا هي شركة هندسة برمجيات صغيرة مكرسة لتقديم تطبيقات ويب عالية الجودة وحلول برمجية مخصصة وخدمات رقمية مصممة خصيصاً لاحتياجات عملك.',
        'services_title': 'خدماتنا',
        'services_subtitle': 'حلول هندسة برمجيات شاملة مصممة خصيصاً لاحتياجاتك',
        'services_view_all': 'عرض جميع الخدمات',
        'service_website': 'تطوير المواقع',
        'service_website_desc': 'مواقع مخصصة مبنية بتقنيات حديثة وتصميم متجاوب وتحسين محركات البحث.',
        'service_webapp': 'تطبيقات الويب',
        'service_webapp_desc': 'تطبيقات ويب قابلة للتطوير بإطارات حديثة وأفضل الممارسات.',
        'service_backend': 'أنظمة الخلفية',
        'service_backend_desc': 'تطوير واجهات برمجة التطبيقات القوية وتصميم قواعد البيانات وهندسة الخادم.',
        'service_maintenance': 'الصيانة والدعم',
        'service_maintenance_desc': 'دعم مستمر وتحديثات وصيانة لتطبيقاتك.',
        'cta_title': 'هل أنت مستعد لبدء مشروعك؟',
        'cta_text': 'دعنا نناقش كيف يمكننا المساعدة في تحقيق رؤيتك.',
        'cta_button': 'تواصل معنا',
        'about_title': 'من نحن - موري-ألفا',
        'about_subtitle': 'فريق من مهندسي البرمجيات المتحمسين المكرسين لبناء حلول رقمية استثنائية',
        'about_who': 'من نحن',
        'about_who_text': 'موري-ألفا هي شركة هندسة برمجيات صغيرة لكنها مكرسة تتخصص في إنشاء تطبيقات ويب حديثة وقابلة للتطوير وحلول برمجية مخصصة. نجمع بين الخبرة التقنية وحل المشكلات الإبداعي لتقديم حلول تعزز نمو الأعمال.',
        'about_mission': 'مهمتنا',
        'about_mission_text': 'تمكين الشركات بحلول تكنولوجية متطورة موثوقة وقابلة للتطوير وسهلة الاستخدام. نؤمن ببناء شراكات طويلة الأمد مع عملائنا.',
        'about_values': 'قيمنا',
        'about_value_quality': 'الجودة',
        'about_value_quality_text': 'لا نتساهل أبداً في جودة الكود وأفضل الممارسات.',
        'about_value_innovation': 'الابتكار',
        'about_value_innovation_text': 'نبقى محدثين بأحدث التقنيات والاتجاهات.',
        'about_value_collaboration': 'التعاون',
        'about_value_collaboration_text': 'نعمل بشكل وثيق مع العملاء لفهم احتياجاتهم.',
        'about_team': 'فريقنا',
        'about_team_subtitle': 'تعرف على المطورين الموهوبين وراء موري-ألفا',
        'team_frontend': 'مطور واجهة أمامية',
        'team_backend': 'مطور خلفية',
        'team_taleb_desc': 'أنا مطور واجهات أمامية شغوف مكرس لإنشاء واجهات مستخدم جميلة وسريعة الاستجابة وتجارب مستخدم سلسة. أتخصص في HTML5 و CSS3 و JavaScript الحديث لتحويل التصاميم الإبداعية إلى تطبيقات ويب وظيفية وتفاعلية.',
        'team_ali_desc': 'يركز على بناء حلول قوية من جانب الخادم وواجهات برمجة التطبيقات وهندسة قواعد البيانات. يضمن الأمان والأداء والقابلية للتطوير.',
        'about_technologies': 'التقنيات التي نستخدمها',
        'about_technologies_subtitle': 'خبرتنا تمتد عبر تقنيات الويب الحديثة',
        'about_work_together': 'دعنا نعمل معاً',
        'about_work_together_text': 'مهتم بمعرفة المزيد عن كيف يمكننا مساعدة عملك؟',
        'about_contact_button': 'اتصل بنا',
        'service_website_detail': 'نقوم بإنشاء مواقع ويب حديثة وسريعة الاستجابة وسريعة وآمنة ومحسّنة لمحركات البحث. سواء كنت بحاجة إلى صفحة هبوط بسيطة أو موقع متعدد الصفحات معقد، فإننا نبني حلولاً تعكس علامتك التجارية وتجذب جمهورك. مواقعنا مصممة للهواتف المحمولة أولاً، مما يضمن تجربة مثالية عبر جميع الأجهزة.',
        'service_website_deliver': 'ما نقدمه:',
        'service_website_deliver_items': 'تصميم متجاوب، تحسين محركات البحث، أوقات تحميل سريعة، كود نظيف، وإدارة محتوى سهلة.',
        'service_webapp_detail': 'تطبيقات ويب مخصصة مبنية لحل تحديات عملك المحددة. من لوحات المعلومات التفاعلية وأدوات تصور البيانات إلى منصات التجارة الإلكترونية وأنظمة إدارة المحتوى، نطور تطبيقات تعمل على تبسيط عملياتك وتعزيز الإنتاجية.',
        'service_webapp_deliver': 'ما نقدمه:',
        'service_webapp_deliver_items': 'وظائف مخصصة، مصادقة المستخدم، إدارة البيانات، تحديثات في الوقت الفعلي، وهندسة قابلة للتطوير.',
        'service_backend_detail': 'بنية تحتية قوية للخلفية وواجهات برمجة التطبيقات التي تشغل تطبيقاتك. نصمم وننفذ حلولاً آمنة وقابلة للتطوير من جانب الخادم تتعامل مع منطق الأعمال المعقد ومعالجة البيانات والتكامل مع خدمات الطرف الثالث. أنظمة الخلفية الخاصة بنا مبنية مع مراعاة الأمان والأداء.',
        'service_backend_deliver': 'ما نقدمه:',
        'service_backend_deliver_items': 'واجهات برمجة تطبيقات RESTful، تصميم قواعد البيانات، هندسة الخادم، تنفيذ الأمان، وتكامل الأنظمة.',
        'service_maintenance_detail': 'حافظ على أصولك الرقمية تعمل بسلاسة مع خدمات الصيانة والدعم المستمرة لدينا. نقدم تحديثات منتظمة وترقيعات أمنية وإصلاحات للأخطاء وتحسينات للميزات لضمان بقاء أنظمتك حديثة وآمنة. فريق الدعم لدينا سريع الاستجابة ومستعد للمساعدة كلما احتجت إلى المساعدة.',
        'service_maintenance_deliver': 'ما نقدمه:',
        'service_maintenance_deliver_items': 'تحديثات منتظمة، مراقبة الأمان، إصلاحات الأخطاء، تحسين الأداء، والدعم الفني.',
        'service_cta_title': 'هل أنت مستعد للبدء؟',
        'service_cta_text': 'دعنا نناقش متطلبات مشروعك وكيف يمكننا المساعدة في تحقيق رؤيتك.',
        'service_cta_button': 'اتصل بنا اليوم',
        'projects_title': 'مشاريعنا',
        'projects_subtitle': 'عرض أعمالنا وإنجازاتنا الأخيرة',
        'project_corporate': 'موقع ويب للشركات',
        'project_corporate_desc': 'موقع ويب حديث وسريع الاستجابة لشركة ناشئة مع نماذج اتصال متكاملة وصفحات خدمات وتصميم نظيف ومهني.',
        'project_analytics': 'لوحة تحليلات',
        'project_analytics_desc': 'تطبيق ويب شامل لتصور البيانات والتحليلات، مع تحديثات في الوقت الفعلي ومخططات تفاعلية.',
        'project_ecommerce': 'منصة التجارة الإلكترونية',
        'project_ecommerce_desc': 'متجر عبر الإنترنت كامل الميزات مع إدارة المنتجات وسلة التسوق وتكامل الدفع وتتبع الطلبات.',
        'project_cms': 'نظام إدارة المحتوى',
        'project_cms_desc': 'حل CMS مخصص يسمح للعملاء بإدارة محتوى موقع الويب الخاص بهم بسهولة باستخدام واجهة إدارية بديهية.',
        'project_api': 'خلفية API آمنة',
        'project_api_desc': 'نظام خلفي قوي مع المصادقة والتفويض ونقاط نهاية API آمنة لتطبيق جوال.',
        'project_portfolio': 'موقع محفظة',
        'project_portfolio_desc': 'موقع محفظة أنيق لمحترف إبداعي يعرض عروض المشاريع ونماذج الاتصال والرسوم المتحركة السلسة.',
        'projects_cta_title': 'هل لديك مشروع في الاعتبار؟',
        'projects_cta_text': 'دعنا نناقش كيف يمكننا المساعدة في تحقيق مشروعك القادم.',
        'projects_cta_button': 'ابدأ مشروعاً',
        'contact_title': 'اتصل بنا',
        'contact_subtitle': 'نود أن نسمع منك. تواصل معنا.',
        'contact_info': 'معلومات الاتصال',
        'contact_phone': 'الهاتف',
        'contact_email': 'البريد الإلكتروني',
        'contact_whatsapp': 'واتساب',
        'contact_telegram': 'تيليجرام',
        'contact_chat_whatsapp': 'دردشة على واتساب',
        'contact_message_telegram': 'رسالة على تيليجرام',
        'contact_form_name': 'اسمك',
        'contact_form_email': 'بريدك الإلكتروني',
        'contact_form_message': 'رسالتك',
        'contact_form_submit': 'إرسال الرسالة',
        'contact_why_title': 'لماذا تختار موري-ألفا؟',
        'contact_success': 'شكراً لتواصلك معنا! لقد استلمنا رسالتك وسنعود إليك قريباً.',
        'contact_error': 'عذراً، حدث خطأ في إرسال رسالتك. يرجى المحاولة مرة أخرى لاحقاً.',
        'footer_tagline': 'بناء تطبيقات ويب موثوقة وحلول رقمية.',
        'footer_quick_links': 'روابط سريعة',
        'footer_services': 'الخدمات',
        'footer_contact': 'اتصل بنا',
        'footer_ready': 'هل أنت مستعد لبدء مشروعك؟',
        'footer_get_touch': 'تواصل معنا',
        'footer_copyright': 'جميع الحقوق محفوظة.',
        'lang_switch': 'اللغة',
    },
    
    'fr': {
        'nav_home': 'Accueil',
        'nav_about': 'À propos',
        'nav_services': 'Services',
        'nav_projects': 'Projets',
        'nav_contact': 'Contact',
        'hero_title': 'Mauri-Alpha',
        'hero_subtitle': 'Nous créons des applications web fiables et des solutions numériques.',
        'hero_cta': 'Contactez-nous',
        'welcome_title': 'Bienvenue chez Mauri-Alpha',
        'welcome_text': 'Mauri-Alpha est une petite entreprise d\'ingénierie logicielle dédiée à la fourniture d\'applications web de haute qualité, de solutions logicielles personnalisées et de services numériques adaptés aux besoins de votre entreprise.',
        'services_title': 'Nos Services',
        'services_subtitle': 'Solutions d\'ingénierie logicielle complètes adaptées à vos besoins',
        'services_view_all': 'Voir tous les services',
        'service_website': 'Développement de Sites Web',
        'service_website_desc': 'Sites web personnalisés construits avec des technologies modernes, un design réactif et une optimisation SEO.',
        'service_webapp': 'Applications Web',
        'service_webapp_desc': 'Applications web évolutives avec des frameworks modernes et les meilleures pratiques.',
        'service_backend': 'Systèmes Backend',
        'service_backend_desc': 'Développement d\'API robuste, conception de bases de données et architecture serveur.',
        'service_maintenance': 'Maintenance & Support',
        'service_maintenance_desc': 'Support continu, mises à jour et maintenance pour vos applications.',
        'cta_title': 'Prêt à démarrer votre projet ?',
        'cta_text': 'Discutons de la façon dont nous pouvons vous aider à concrétiser votre vision.',
        'cta_button': 'Contactez-nous',
        'about_title': 'À propos de Mauri-Alpha',
        'about_subtitle': 'Une équipe d\'ingénieurs logiciels passionnés dédiés à la création de solutions numériques exceptionnelles',
        'about_who': 'Qui sommes-nous',
        'about_who_text': 'Mauri-Alpha est une petite entreprise d\'ingénierie logicielle dédiée qui se spécialise dans la création d\'applications web modernes et évolutives et de solutions logicielles personnalisées. Nous combinons l\'expertise technique avec la résolution créative de problèmes pour fournir des solutions qui stimulent la croissance des entreprises.',
        'about_mission': 'Notre Mission',
        'about_mission_text': 'Donner aux entreprises les moyens d\'utiliser des solutions technologiques de pointe qui sont fiables, évolutives et conviviales. Nous croyons en l\'établissement de partenariats à long terme avec nos clients.',
        'about_values': 'Nos Valeurs',
        'about_value_quality': 'Qualité',
        'about_value_quality_text': 'Nous ne compromettons jamais la qualité du code et les meilleures pratiques.',
        'about_value_innovation': 'Innovation',
        'about_value_innovation_text': 'Nous restons à jour avec les dernières technologies et tendances.',
        'about_value_collaboration': 'Collaboration',
        'about_value_collaboration_text': 'Nous travaillons en étroite collaboration avec les clients pour comprendre leurs besoins.',
        'about_team': 'Notre Équipe',
        'about_team_subtitle': 'Rencontrez les développeurs talentueux derrière Mauri-Alpha',
        'team_frontend': 'Développeur Front-end',
        'team_backend': 'Développeur Back-end',
        'team_taleb_desc': 'Je suis un développeur front-end passionné dédié à la création d\'interfaces utilisateur belles et réactives et d\'expériences utilisateur fluides. Je me spécialise en HTML5, CSS3 et JavaScript moderne pour transformer des designs créatifs en applications web fonctionnelles et interactives.',
        'team_ali_desc': 'Se concentre sur la construction de solutions côté serveur robustes, d\'API et d\'architectures de bases de données. Assure la sécurité, les performances et l\'évolutivité.',
        'about_technologies': 'Technologies que nous utilisons',
        'about_technologies_subtitle': 'Notre expertise s\'étend sur les technologies web modernes',
        'about_work_together': 'Travaillons ensemble',
        'about_work_together_text': 'Intéressé à en savoir plus sur la façon dont nous pouvons aider votre entreprise ?',
        'about_contact_button': 'Contactez-nous',
        'service_website_detail': 'Nous créons des sites web modernes et réactifs qui sont rapides, sécurisés et optimisés pour les moteurs de recherche. Que vous ayez besoin d\'une page d\'atterrissage simple ou d\'un site multi-pages complexe, nous construisons des solutions qui reflètent votre marque et engagent votre audience. Nos sites web sont d\'abord conçus pour mobile, garantissant une expérience parfaite sur tous les appareils.',
        'service_website_deliver': 'Ce que nous livrons :',
        'service_website_deliver_items': 'Design réactif, optimisation SEO, temps de chargement rapides, code propre et gestion de contenu facile.',
        'service_webapp_detail': 'Applications web personnalisées construites pour résoudre vos défis commerciaux spécifiques. Des tableaux de bord interactifs et outils de visualisation de données aux plateformes e-commerce et systèmes de gestion de contenu, nous développons des applications qui rationalisent vos opérations et améliorent la productivité.',
        'service_webapp_deliver': 'Ce que nous livrons :',
        'service_webapp_deliver_items': 'Fonctionnalités personnalisées, authentification utilisateur, gestion des données, mises à jour en temps réel et architecture évolutive.',
        'service_backend_detail': 'Infrastructure backend robuste et API qui alimentent vos applications. Nous concevons et implémentons des solutions côté serveur sécurisées et évolutives qui gèrent la logique métier complexe, le traitement des données et l\'intégration avec des services tiers. Nos systèmes backend sont construits en pensant à la sécurité et aux performances.',
        'service_backend_deliver': 'Ce que nous livrons :',
        'service_backend_deliver_items': 'API RESTful, conception de bases de données, architecture serveur, implémentation de sécurité et intégration système.',
        'service_maintenance_detail': 'Maintenez vos actifs numériques en fonctionnement fluide avec nos services de maintenance et de support continus. Nous fournissons des mises à jour régulières, des correctifs de sécurité, des corrections de bugs et des améliorations de fonctionnalités pour garantir que vos systèmes restent à jour et sécurisés. Notre équipe de support est réactive et prête à aider chaque fois que vous avez besoin d\'assistance.',
        'service_maintenance_deliver': 'Ce que nous livrons :',
        'service_maintenance_deliver_items': 'Mises à jour régulières, surveillance de la sécurité, corrections de bugs, optimisation des performances et support technique.',
        'service_cta_title': 'Prêt à commencer ?',
        'service_cta_text': 'Discutons de vos exigences de projet et de la façon dont nous pouvons vous aider à concrétiser votre vision.',
        'service_cta_button': 'Contactez-nous aujourd\'hui',
        'projects_title': 'Nos Projets',
        'projects_subtitle': 'Présentation de nos travaux et réalisations récents',
        'project_corporate': 'Site Web d\'Entreprise',
        'project_corporate_desc': 'Un site web moderne et réactif pour une entreprise en croissance avec des formulaires de contact intégrés, des pages de services et un design propre et professionnel.',
        'project_analytics': 'Tableau de Bord Analytique',
        'project_analytics_desc': 'Une application web complète pour la visualisation et l\'analyse de données, avec des mises à jour en temps réel et des graphiques interactifs.',
        'project_ecommerce': 'Plateforme E-Commerce',
        'project_ecommerce_desc': 'Une boutique en ligne complète avec gestion de produits, panier d\'achat, intégration de paiement et suivi des commandes.',
        'project_cms': 'Système de Gestion de Contenu',
        'project_cms_desc': 'Une solution CMS personnalisée qui permet aux clients de gérer facilement le contenu de leur site web avec une interface d\'administration intuitive.',
        'project_api': 'Backend API Sécurisé',
        'project_api_desc': 'Un système backend robuste avec authentification, autorisation et points de terminaison API sécurisés pour une application mobile.',
        'project_portfolio': 'Site Portfolio',
        'project_portfolio_desc': 'Un site portfolio élégant pour un professionnel créatif avec des présentations de projets, des formulaires de contact et des animations fluides.',
        'projects_cta_title': 'Avez-vous un projet en tête ?',
        'projects_cta_text': 'Discutons de la façon dont nous pouvons vous aider à concrétiser votre prochain projet.',
        'projects_cta_button': 'Démarrer un projet',
        'contact_title': 'Contactez-nous',
        'contact_subtitle': 'Nous aimerions avoir de vos nouvelles. Contactez-nous.',
        'contact_info': 'Informations de Contact',
        'contact_phone': 'Téléphone',
        'contact_email': 'Email',
        'contact_whatsapp': 'WhatsApp',
        'contact_telegram': 'Telegram',
        'contact_chat_whatsapp': 'Discuter sur WhatsApp',
        'contact_message_telegram': 'Message sur Telegram',
        'contact_form_name': 'Votre Nom',
        'contact_form_email': 'Votre Email',
        'contact_form_message': 'Votre Message',
        'contact_form_submit': 'Envoyer le Message',
        'contact_why_title': 'Pourquoi choisir Mauri-Alpha ?',
        'contact_success': 'Merci de nous avoir contactés ! Nous avons reçu votre message et vous répondrons bientôt.',
        'contact_error': 'Désolé, une erreur s\'est produite lors de l\'envoi de votre message. Veuillez réessayer plus tard.',
        'footer_tagline': 'Création d\'applications web fiables et de solutions numériques.',
        'footer_quick_links': 'Liens Rapides',
        'footer_services': 'Services',
        'footer_contact': 'Contact',
        'footer_ready': 'Prêt à démarrer votre projet ?',
        'footer_get_touch': 'Contactez-nous',
        'footer_copyright': 'Tous droits réservés.',
        'lang_switch': 'Langue',
    }
};

// Get current language from localStorage or default to 'en'
let currentLang = localStorage.getItem('lang') || 'en';

// Translation function
function t(key) {
    return translations[currentLang][key] || translations['en'][key] || key;
}

// Set language
function setLanguage(lang) {
    currentLang = lang;
    localStorage.setItem('lang', lang);
    document.documentElement.lang = lang;
    document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';
    document.body.className = lang === 'ar' ? 'rtl' : 'ltr';
    
    // Add RTL styles if Arabic
    if (lang === 'ar') {
        if (!document.getElementById('rtl-styles')) {
            const style = document.createElement('style');
            style.id = 'rtl-styles';
            style.textContent = 'body { direction: rtl; } .container { text-align: right; }';
            document.head.appendChild(style);
        }
    } else {
        const rtlStyle = document.getElementById('rtl-styles');
        if (rtlStyle) rtlStyle.remove();
    }
    
    updatePageContent();
}

// Update all translatable content on the page
function updatePageContent() {
    // Update all elements with data-translate attribute
    document.querySelectorAll('[data-translate]').forEach(el => {
        const key = el.getAttribute('data-translate');
        el.textContent = t(key);
    });
    
    // Update placeholders
    document.querySelectorAll('[data-translate-placeholder]').forEach(el => {
        const key = el.getAttribute('data-translate-placeholder');
        el.placeholder = t(key);
    });
    
    // Update language selector
    const langCurrent = document.querySelector('.lang-current');
    if (langCurrent) {
        langCurrent.textContent = currentLang.toUpperCase();
    }
    
    // Update active language option
    document.querySelectorAll('.lang-option').forEach(opt => {
        opt.classList.remove('active');
        if (opt.getAttribute('data-lang') === currentLang) {
            opt.classList.add('active');
        }
    });
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    setLanguage(currentLang);
    
    // Handle language switcher clicks
    document.querySelectorAll('.lang-option').forEach(opt => {
        opt.addEventListener('click', function(e) {
            e.preventDefault();
            const lang = this.getAttribute('data-lang');
            setLanguage(lang);
        });
    });
});
