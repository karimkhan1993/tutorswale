<?php

return [
    'app' => [
        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'fas fa-cube',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_name', // unique name for field
                'label' => 'App Name', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Laravel Starter', // default value if you want
            ],
            [
                'type' => 'file', // input field type
                'data' => 'file', // data type
                'name' => 'company_logo', // unique name for field
                'label' => 'Company Logo', // field label
                'rules' => '', // validation rules
                'class' => '', // CSS classes for input
                'value' => '', // default value
                'help' => 'Upload an image that represents your company.', // help text
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'footer_text', // unique name for field
                'label' => 'Footer Text', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '<a href="https://github.com/nasirkhan/laravel-starter/" class="text-muted">Built with ♥ from Bangladesh</a>', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'address', // unique name for field
                'label' => 'Office Address', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '<a href="https://github.com/nasirkhan/laravel-starter/" class="text-muted">Built with ♥ from Bangladesh</a>', // default value if you want
            ],
            [
                'type' => 'checkbox', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'show_copyright', // unique name for field
                'label' => 'Show Copyright', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '1', // default value if you want
            ], 
        ],
    ],
    'email' => [
        'title' => 'Email',
        'desc' => 'Email settings for app',
        'icon' => 'fas fa-envelope',

        'elements' => [
            [
                'type' => 'email', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'contactemail', // unique name for field
                'label' => 'Contact Email', // you know what label it is
                'rules' => 'required|email', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'info@example.com', // default value if you want
            ],
            [
                'type' => 'email', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'supportemail', // unique name for field
                'label' => 'Support Email', // you know what label it is
                'rules' => 'required|email', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'info@example.com', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'officeaddress', // unique name for field
                'label' => 'Office Address', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
        ],

    ],

    'aboutus' => [
        'title' => 'About Us',
        'desc' => 'About Us settings for the application',
        'icon' => 'fas fa-info-circle',

        'elements' => [
            [
                'type' => 'textarea', // input field type
                'data' => 'string', // data type
                'name' => 'aboutus_description', // unique name for field
                'label' => 'About Us Description', // field label
                'rules' => 'required|string|min:10', // validation rules
                'class' => '', // CSS classes for input
                'value' => 'Write something about your company here...', // default value
                'help' => 'Provide a brief description about your company.', // help text
            ],
            [
                'type' => 'file', // input field type
                'data' => 'file', // data type
                'name' => 'aboutus_image', // unique name for field
                'label' => 'About Us Image', // field label
                'rules' => '', // validation rules
                'class' => '', // CSS classes for input
                'value' => '', // default value
                'help' => 'Upload an image that represents your company.', // help text
            ],
        ],
    ],

    'contactus' => [
        'title' => 'Contact Us',
        'desc' => 'Contact Us settings for the application',
        'icon' => 'fas fa-info-circle',

        'elements' => [
            [
                'type' => 'file', // Input field type
                'data' => 'file', // Data type
                'name' => 'Front_image', // Unique name for field
                'label' => 'Front Image', // Corrected label
                'rules' => 'mimes:jpeg,png,jpg,gif|max:2048', // Validation rules
                'class' => '',
                'value' => '', 
                'help' => 'Upload a front image that represents your company.', // Help text
            ],
            [
                'type' => 'file', // Input field type
                'data' => 'file', // Data type
                'name' => 'Banner_image', // Unique name for field
                'label' => 'Banner Image', // Corrected label
                'rules' => 'mimes:jpeg,png,jpg,gif|max:2048', // Validation rules
                'class' => '', 
                'value' => '', 
                'help' => 'Upload a banner image that represents your company.', // Help text
            ],
        ],
    ],


    'whyChooseUs' => [
        'title' => 'Why Choose Us',
        'desc' => 'Settings for the Why Choose Us section in the application.',
        'icon' => 'fas fa-info-circle', // FontAwesome icon for UI

        'elements' => [
            [
                'type'  => 'textarea', // Input field type
                'data'  => 'string',   // Data type
                'name'  => 'whyChooseUs_description', // Unique field name
                'label' => 'Why Choose Us Description', // Field label
                'rules' => 'required', // Validation rules
                'class' => 'form-control', // Add Bootstrap class for styling
                'value' => 'Write something about your company here...', // Default value
                'help'  => 'Provide a brief description about your company.', // Help text
            ],
            [
                'type'  => 'textarea', 
                'data'  => 'string', 
                'name'  => 'whyChooseUs_statistic', 
                'label' => 'Why Choose Us Statistics', // Fixed duplicate label
                'rules' => 'required', 
                'class' => 'form-control', 
                'value' => 'Provide statistics or achievements here...', // More meaningful placeholder
                'help'  => 'Add key statistics that highlight your company’s success.', 
            ],
        ],
    ],

    'registration' => [
        'title' => 'Registration',
        'desc' => 'Settings for the registration section in the application.',
        'icon' => 'fas fa-info-circle', // FontAwesome icon for UI

        'elements' => [
            [
                'type'  => 'text', // Input field type
                'data'  => 'string', // Data type
                'name'  => 'registration_title', // Unique field name
                'label' => 'Title', // Field label (Capitalized for consistency)
                'rules' => 'required|string|max:500', // Added max length for better validation
                'class' => 'form-control', // Bootstrap styling
                'value' => 'Write something about your company here...', // Default placeholder text
            ],
            [
                'type'  => 'file', // File input type
                'data'  => 'file', // Data type
                'name'  => 'registration_image', // Unique name for the field
                'label' => 'Upload Image', // Clearer label
                'rules' => 'mimes:jpeg,png,jpg,gif|max:2048', // Restricting to image formats
                'class' => 'form-control-file', // Bootstrap file input class
                'value' => '', // File inputs should not have default values
                'help'  => 'Upload a image that represents your company (Max size: 2MB).', // More descriptive help text
            ],
        ],
    ],



    'faq' => [
        'title' => 'FAQ Section',
        'desc' => 'Frequently Asked Questions settings for the application',
        'icon' => 'fas fa-question-circle', // Updated icon to match FAQ theme

        'elements' => [
            [
                'type' => 'textarea', // input field type
                'data' => 'string', // data type
                'name' => 'faq_description', // unique name for the field
                'label' => 'FAQ Description', // Updated label to be FAQ-specific
                'rules' => 'required|string|min:10', // Validation rules
                'class' => '', // CSS classes for input
                'value' => 'Write a short introduction to your FAQ section...', // Default value
                'help' => 'Provide a brief description of the FAQ section.', // Updated help text
            ],
            [
                'type' => 'file', // input field type
                'data' => 'file', // data type
                'name' => 'faq_image', // unique name for field
                'label' => 'FAQ Section Image', // Updated label
                'rules' => 'max:2048', // Added validation for image files
                'class' => '', // CSS classes for input
                'value' => '', // Default value
                'help' => 'Upload an image related to the FAQ section.', // Updated help text
            ],
        ],
    ],

    'telephone' => [
        'title' => 'Phone Number',
        'desc' => 'Phone Number settings for app',
        'icon' => 'fas fa-telephone',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'whatsappNo', // unique name for field
                'label' => 'Whatsapp No', // you know what label it is
                'rules' => 'required|string', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '9971606762', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'supportNo', // unique name for field
                'label' => 'Support Call No.', // you know what label it is
                'rules' => 'required|string', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '9971606762', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'Contact1', // unique name for field
                'label' => '#1 Contact', // you know what label it is
                'rules' => 'required|string', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '9971606761', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'Contact2', // unique name for field
                'label' => '#2 Contact', // you know what label it is
                'rules' => 'required|string', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '9971606762', // default value if you want
            ],
        ],
    ],
    'social' => [
        'title' => 'Social Profiles',
        'desc' => 'Link of all the online/social profiles.',
        'icon' => 'fas fa-users',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'website_url', // unique name for field
                'label' => 'Website URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'https://nasirkhn.com', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'facebook_url', // unique name for field
                'label' => 'Facebook Page URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'twitter_url', // unique name for field
                'label' => 'Twitter Profile URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'https://twitter.com/nasirkhansaikat', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'instagram_url', // unique name for field
                'label' => 'Instagram Account URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'https://www.instagram.com/nasirkhansaikat', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'youtube_url', // unique name for field
                'label' => 'Youtube Channel URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'https://www.youtube.com/@nasirkhan', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'linkedin_url', // unique name for field
                'label' => 'LinkedIn URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'whatsapp_url', // unique name for field
                'label' => 'WhatsApp URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'messenger_url', // unique name for field
                'label' => 'Messenger URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
        ],

    ],
    'meta' => [
        'title' => 'Meta ',
        'desc' => 'Application Meta Data',
        'icon' => 'fa-solid fa-earth-asia',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_site_name', // unique name for field
                'label' => 'Meta Site Name', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Awesome Laravel | A Laravel Starter Project', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_description', // unique name for field
                'label' => 'Meta Description', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'A CMS like modular starter application project built with latest Laravel.', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_keyword', // unique name for field
                'label' => 'Meta Keyword', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Web Application, web app, Laravel, Laravel starter, Bootstrap, Admin, Template, Open Source, nasir khan saikat, nasirkhansaikat', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_image', // unique name for field
                'label' => 'Meta Image', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'img/default_banner.jpg', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_fb_app_id', // unique name for field
                'label' => 'Meta Facebook App Id', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '569561286532601', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_twitter_site', // unique name for field
                'label' => 'Meta Twitter Site Account', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '@nasirkhansaikat', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_twitter_creator', // unique name for field
                'label' => 'Meta Twitter Creator Account', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '@nasirkhansaikat', // default value if you want
            ],
        ],
    ],
    'analytics' => [
        'title' => 'Analytics',
        'desc' => 'Application Analytics',
        'icon' => 'fas fa-chart-line',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'google_analytics', // unique name for field
                'label' => 'Google Analytics (gtag)', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'G-ABCDE12345', // default value if you want
                'help' => 'Paste the only the Measurement Id of Google Analytics stream.', // Help text for the input field.
            ],
        ],

    ],
    'custom_css' => [
        'title' => 'Custom Code',
        'desc' => 'Custom code area',
        'icon' => 'fa-solid fa-file-code',

        'elements' => [
            [
                'type' => 'textarea', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'custom_css_block', // unique name for field
                'label' => 'Custom Css Code', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
                'help' => 'Paste the code in this field.', // Help text for the input field.
                'display' => 'raw', // Help text for the input field.
            ],
        ],

    ],
];
