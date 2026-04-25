<?php
$lang = 'ar';
$dir = 'rtl';
$alt_lang = 'en';
$alt_lang_label = 'English';
$alt_lang_url = '../en/products.php';

// Enhanced products data with attributes in Arabic
$products = [
    [
        'id' => 1,
        'name' => 'النرجس',
        'scientific_name' => 'Narcissus tazetta',
        'category' => 'أعشاب',
        'origin' => 'البحر الأبيض المتوسط',
        'description' => 'أزهار عطرية جميلة برائحة لطيفة، تستخدم بشكل شائع في صناعة العطور والطب التقليدي.',
        'uses' => ['العطور', 'الطب التقليدي', 'الزينة'],
        'season' => 'الربيع',
        'availability' => 'متوفر',
        'price_per_kg' => '$45',
        'min_order' => '5 كجم',
        'img' => '../assets/products/Narcissus.webp',
        'attributes' => [
            'اللون' => 'أبيض/أصفر',
            'الرائحة' => 'قوية، حلوة',
            'مدة الصلاحية' => '12 شهر',
            'التخزين' => 'مكان بارد وجاف',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 2,
        'name' => 'الفلفل الأبيض',
        'scientific_name' => 'Piper nigrum',
        'category' => 'بهارات',
        'origin' => 'الهند',
        'description' => 'فلفل أبيض ممتاز بنكهة خفيفة وخواص عطرية، مثالي للطهي الفاخر.',
        'uses' => ['الطهي', 'الصناعات الغذائية', 'الطب'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$28',
        'min_order' => '10 كجم',
        'img' => '../assets/products/White_Pepper.webp',
        'attributes' => [
            'اللون' => 'أبيض كريمي',
            'النكهة' => 'خفيفة، ترابية',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'حاوية محكمة',
            'الشهادة' => 'شهادة ISO'
        ]
    ],
    [
        'id' => 3,
        'name' => 'الخولنجان',
        'scientific_name' => 'Alpinia officinarum',
        'category' => 'أعشاب',
        'origin' => 'الصين',
        'description' => 'عشب عطري بنكهة تشبه الزنجبيل، يستخدم على نطاق واسع في المطبخ الآسيوي والطب التقليدي.',
        'uses' => ['الطهي', 'طبي', 'العلاج بالروائح'],
        'season' => 'على مدار العام',
        'availability' => 'محدود',
        'price_per_kg' => '$35',
        'min_order' => '5 كجم',
        'img' => '../assets/products/Alpinia.webp',
        'attributes' => [
            'اللون' => 'بني',
            'النكهة' => 'حار، دافئ',
            'مدة الصلاحية' => '18 شهر',
            'التخزين' => 'مكان جاف',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 4,
        'name' => 'اليانسون',
        'scientific_name' => 'Pimpinella anisum',
        'category' => 'بهارات',
        'origin' => 'مصر',
        'description' => 'بذور حلوة عطرية بنكهة تشبه اليانسون، ضرورية للخبز والمشروبات.',
        'uses' => ['الخبز', 'المشروبات', 'الطب'],
        'season' => 'الصيف',
        'availability' => 'متوفر',
        'price_per_kg' => '$22',
        'min_order' => '10 كجم',
        'img' => '../assets/products/Anise.webp',
        'attributes' => [
            'اللون' => 'أخضر بني',
            'النكهة' => 'حلوة، يانسون',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'مكان بارد وجاف',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 5,
        'name' => 'الريحان',
        'scientific_name' => 'Ocimum basilicum',
        'category' => 'أعشاب',
        'origin' => 'البحر الأبيض المتوسط',
        'description' => 'عشب عطري طازج ضروري للمطابخ المتوسطية والآسيوية.',
        'uses' => ['الطهي', 'الطب', 'العلاج بالروائح'],
        'season' => 'الصيف',
        'availability' => 'متوفر',
        'price_per_kg' => '$18',
        'min_order' => '3 كجم',
        'img' => '../assets/products/Basil.webp',
        'attributes' => [
            'اللون' => 'أخضر',
            'النكهة' => 'حلوة، فلفلية',
            'مدة الصلاحية' => '6 أشهر (مجفف)',
            'التخزين' => 'حاوية محكمة',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 6,
        'name' => 'ورق الغار',
        'scientific_name' => 'Laurus nobilis',
        'category' => 'أعشاب',
        'origin' => 'تركيا',
        'description' => 'أوراق عطرية تضفي عمقاً على الحساء واليخنات والصلصات.',
        'uses' => ['الطهي', 'الطب', 'الحفظ'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$25',
        'min_order' => '5 كجم',
        'img' => '../assets/products/Bay_Leaves.webp',
        'attributes' => [
            'اللون' => 'أخضر داكن',
            'النكهة' => 'عشبية، مريرة قليلاً',
            'مدة الصلاحية' => '12 شهر',
            'التخزين' => 'مكان جاف',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 7,
        'name' => 'الفاصوليا',
        'scientific_name' => 'Phaseolus vulgaris',
        'category' => 'بقوليات',
        'origin' => 'سوريا',
        'description' => 'فاصوليا عالية الجودة غنية بالبروتين والمغذيات الأساسية.',
        'uses' => ['غذاء', 'علف حيواني', 'صناعة'],
        'season' => 'الخريف',
        'availability' => 'متوفر',
        'price_per_kg' => '$3',
        'min_order' => '25 كجم',
        'img' => '../assets/products/Beans.webp',
        'attributes' => [
            'اللون' => 'متنوع',
            'البروتين' => '22%',
            'مدة الصلاحية' => '18 شهر',
            'التخزين' => 'مكان بارد وجاف',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 8,
        'name' => 'الفلفل الأسود',
        'scientific_name' => 'Piper nigrum',
        'category' => 'بهارات',
        'origin' => 'فيتنام',
        'description' => 'ملك البهارات بنكهة لاذعة قوية وفوائد صحية عديدة.',
        'uses' => ['الطهي', 'الطب', 'الحفظ'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$15',
        'min_order' => '10 كجم',
        'img' => '../assets/products/Black_Pepper.webp',
        'attributes' => [
            'اللون' => 'أسود',
            'النكهة' => 'لاذعة، حارة',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'حاوية محكمة',
            'الشهادة' => 'شهادة ISO'
        ]
    ],
    [
        'id' => 9,
        'name' => 'الفول العريض',
        'scientific_name' => 'Vicia faba',
        'category' => 'بقوليات',
        'origin' => 'سوريا',
        'description' => 'فول مغذي غني بالبروتين والألياف الغذائية.',
        'uses' => ['غذاء', 'علف حيواني', 'صناعة'],
        'season' => 'الربيع',
        'availability' => 'موسمي',
        'price_per_kg' => '$4',
        'min_order' => '20 كجم',
        'img' => '../assets/products/Broad_Bean.webp',
        'attributes' => [
            'اللون' => 'أخضر/بني',
            'البروتين' => '26%',
            'مدة الصلاحية' => '12 شهر',
            'التخزين' => 'مكان بارد وجاف',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 10,
        'name' => 'البابونج',
        'scientific_name' => 'Matricaria chamomilla',
        'category' => 'أعشاب',
        'origin' => 'مصر',
        'description' => 'عشب مهدئ برائحة التفاح، يستخدم على نطاق واسع للشاي والاسترخاء.',
        'uses' => ['شاي', 'طب', 'تجميل'],
        'season' => 'الصيف',
        'availability' => 'متوفر',
        'price_per_kg' => '$30',
        'min_order' => '5 كجم',
        'img' => '../assets/products/Chamomile.webp',
        'attributes' => [
            'اللون' => 'أبيض/أصفر',
            'النكهة' => 'تشبه التفاح، حلوة',
            'مدة الصلاحية' => '18 شهر',
            'التخزين' => 'مكان جاف',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 11,
        'name' => 'الحمص',
        'scientific_name' => 'Cicer arietinum',
        'category' => 'بقوليات',
        'origin' => 'سوريا',
        'description' => 'بقوليات متعددة الاستخدامات مثالية للحمص والسلطات والأطباق الشرقية.',
        'uses' => ['غذاء', 'صناعة', 'علف حيواني'],
        'season' => 'الخريف',
        'availability' => 'متوفر',
        'price_per_kg' => '$2.5',
        'min_order' => '25 كجم',
        'img' => '../assets/products/Chickpeas.webp',
        'attributes' => [
            'اللون' => 'بيج',
            'البروتين' => '20%',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'مكان جاف',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 12,
        'name' => 'القرنفل',
        'scientific_name' => 'Syzygium aromaticum',
        'category' => 'بهارات',
        'origin' => 'إندونيسيا',
        'description' => 'بهار عطري مكثف بنكهة دافئة حلوة وخواص طبية.',
        'uses' => ['الطهي', 'طب', 'طب الأسنان'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$32',
        'min_order' => '5 كجم',
        'img' => '../assets/products/Clove.webp',
        'attributes' => [
            'اللون' => 'بني داكن',
            'النكهة' => 'قوية، حلوة',
            'مدة الصلاحية' => '36 شهر',
            'التخزين' => 'حاوية محكمة',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 13,
        'name' => 'القرفة',
        'scientific_name' => 'Cinnamomum verum',
        'category' => 'بهارات',
        'origin' => 'سريلانكا',
        'description' => 'بهار حلو دافئ بنكهة رقيقة وفوائد صحية عديدة.',
        'uses' => ['الطهي', 'خبز', 'طب'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$20',
        'min_order' => '10 كجم',
        'img' => '../assets/products/Cinnamon.webp',
        'attributes' => [
            'اللون' => 'بني',
            'النكهة' => 'حلوة، دافئة',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'مكان بارد وجاف',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 14,
        'name' => 'القهوة',
        'scientific_name' => 'Coffea arabica',
        'category' => 'مشروبات',
        'origin' => 'كولومبيا',
        'description' => 'حبوب قهوة عربية ممتازة بنكهة غنية ورائحة عطرة.',
        'uses' => ['مشروب', 'صناعة غذائية', 'تجميل'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$25',
        'min_order' => '10 كجم',
        'img' => '../assets/products/Coffee.webp',
        'attributes' => [
            'اللون' => 'بني',
            'النكهة' => 'غنية، معقدة',
            'مدة الصلاحية' => '12 شهر',
            'التخزين' => 'مكان بارد ومظلم',
            'الشهادة' => 'تجارة عادلة'
        ]
    ],
    [
        'id' => 15,
        'name' => 'الكزبرة',
        'scientific_name' => 'Coriandrum sativum',
        'category' => 'بهارات',
        'origin' => 'الهند',
        'description' => 'بهار متعدد الاستخدامات بلمسات حمضية، ضروري في العديد من المطابخ.',
        'uses' => ['طهي', 'طب', 'عطور'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$8',
        'min_order' => '10 كجم',
        'img' => '../assets/products/Coriander.webp',
        'attributes' => [
            'اللون' => 'بني',
            'النكهة' => 'حمضية، دافئة',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'حاوية محكمة',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 16,
        'name' => 'لوبيا',
        'scientific_name' => 'Vigna unguiculata',
        'category' => 'بقوليات',
        'origin' => 'نيجيريا',
        'description' => 'بقوليات مغذية غنية بالبروتين والمعادن الأساسية.',
        'uses' => ['غذاء', 'علف حيواني', 'صناعة'],
        'season' => 'الخريف',
        'availability' => 'متوفر',
        'price_per_kg' => '$2',
        'min_order' => '25 كجم',
        'img' => '../assets/products/Cowpeas.webp',
        'attributes' => [
            'اللون' => 'أسود/أبيض',
            'البروتين' => '24%',
            'مدة الصلاحية' => '18 شهر',
            'التخزين' => 'مكان جاف',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 17,
        'name' => 'الكمون',
        'scientific_name' => 'Cuminum cyminum',
        'category' => 'بهارات',
        'origin' => 'الهند',
        'description' => 'بهار ترابي دافئ أساسي في المطابخ الشرق أوسطية والهندية.',
        'uses' => ['طهي', 'طب', 'صناعة غذائية'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$12',
        'min_order' => '10 كجم',
        'img' => '../assets/products/Cuminum.webp',
        'attributes' => [
            'اللون' => 'بني',
            'النكهة' => 'ترابية، دافئة',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'حاوية محكمة',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 18,
        'name' => 'ورد دمشقي',
        'scientific_name' => 'Rosa damascena',
        'category' => 'أعشاب',
        'origin' => 'سوريا',
        'description' => 'ورود عطرية فاخرة تستخدم للعطور والشاي ومستحضرات التجميل.',
        'uses' => ['عطور', 'شاي', 'تجميل'],
        'season' => 'الربيع',
        'availability' => 'موسمي',
        'price_per_kg' => '$150',
        'min_order' => '2 كجم',
        'img' => '../assets/products/Damask_rose.webp',
        'attributes' => [
            'اللون' => 'وردي/أحمر',
            'الرائحة' => 'كثيفة، زهرية',
            'مدة الصلاحية' => '12 شهر',
            'التخزين' => 'مكان بارد وجاف',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 19,
        'name' => 'الشمر',
        'scientific_name' => 'Foeniculum vulgare',
        'category' => 'أعشاب',
        'origin' => 'البحر الأبيض المتوسط',
        'description' => 'عشب عطري بنكهة تشبه اليانسون، يستخدم في الطهي والطب.',
        'uses' => ['طهي', 'طب', 'مشروبات'],
        'season' => 'الصيف',
        'availability' => 'متوفر',
        'price_per_kg' => '$15',
        'min_order' => '5 كجم',
        'img' => '../assets/products/Fennel.webp',
        'attributes' => [
            'اللون' => 'أخضر',
            'النكهة' => 'تشبه اليانسون',
            'مدة الصلاحية' => '18 شهر',
            'التخزين' => 'مكان جاف',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 20,
        'name' => 'الحلبة',
        'scientific_name' => 'Trigonella foenum-graecum',
        'category' => 'أعشاب',
        'origin' => 'الهند',
        'description' => 'عشب مغذي بنكهة تشبه القيقب، يستخدم في الطهي والطب التقليدي.',
        'uses' => ['طهي', 'طب', 'صناعة'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$10',
        'min_order' => '10 كجم',
        'img' => '../assets/products/Fenugreek.webp',
        'attributes' => [
            'اللون' => 'أصفر بني',
            'النكهة' => 'تشبه القيقب، مررة',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'حاوية محكمة',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 21,
        'name' => 'الزنجبيل',
        'scientific_name' => 'Zingiber officinale',
        'category' => 'بهارات',
        'origin' => 'الصين',
        'description' => 'بهار دافئ بنكهة لاذعة وخواص طبية قوية.',
        'uses' => ['طهي', 'طب', 'مشروبات'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$18',
        'min_order' => '10 كجم',
        'img' => '../assets/products/Ginger.webp',
        'attributes' => [
            'اللون' => 'أصفر باهت',
            'النكهة' => 'لاذعة، حارة',
            'مدة الصلاحية' => '12 شهر',
            'التخزين' => 'مكان بارد وجاف',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 22,
        'name' => 'الليمون',
        'scientific_name' => 'Citrus limon',
        'category' => 'فواكه',
        'origin' => 'سوريا',
        'description' => 'فواكه حمضية طازجة بنكهة زاهية وقشر عطري.',
        'uses' => ['غذاء', 'مشروبات', 'تنظيف'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$3',
        'min_order' => '15 كجم',
        'img' => '../assets/products/Lemon.webp',
        'attributes' => [
            'اللون' => 'أصفر',
            'النكهة' => 'حمضية، حامضة',
            'مدة الصلاحية' => '4 أسابيع',
            'التخزين' => 'مبرد',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 23,
        'name' => 'العدس',
        'scientific_name' => 'Lens culinaris',
        'category' => 'بقوليات',
        'origin' => 'كندا',
        'description' => 'بقوليات مغذية عالية البروتين والمعادن الأساسية.',
        'uses' => ['غذاء', 'صناعة', 'علف حيواني'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$2.5',
        'min_order' => '25 كجم',
        'img' => '../assets/products/Lentils.webp',
        'attributes' => [
            'اللون' => 'متنوع',
            'البروتين' => '25%',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'مكان جاف',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 24,
        'name' => 'النرجس',
        'scientific_name' => 'Narcissus tazetta',
        'category' => 'أعشاب',
        'origin' => 'البحر الأبيض المتوسط',
        'description' => 'أزهار عطرية جميلة برائحة لطيفة.',
        'uses' => ['عطور', 'طب', 'زينة'],
        'season' => 'الربيع',
        'availability' => 'موسمي',
        'price_per_kg' => '$45',
        'min_order' => '5 كجم',
        'img' => '../assets/products/Narcissus.webp',
        'attributes' => [
            'اللون' => 'أبيض/أصفر',
            'الرائحة' => 'قوية، حلوة',
            'مدة الصلاحية' => '12 شهر',
            'التخزين' => 'مكان بارد وجاف',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 25,
        'name' => 'حبة البركة',
        'scientific_name' => 'Nigella sativa',
        'category' => 'بهارات',
        'origin' => 'مصر',
        'description' => 'بذور سوداء بفوائد صحية عديدة ونكهة فلفلية.',
        'uses' => ['طب', 'طهي', 'إنتاج زيوت'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$35',
        'min_order' => '5 كجم',
        'img' => '../assets/products/Nigella_sativa.webp',
        'attributes' => [
            'اللون' => 'أسود',
            'النكهة' => 'فلفلية، مررة قليلاً',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'حاوية محكمة',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 26,
        'name' => 'البابريكا',
        'scientific_name' => 'Capsicum annuum',
        'category' => 'بهارات',
        'origin' => 'المجر',
        'description' => 'بهار أحمر زاهي بنكهات حلوة إلى حارة.',
        'uses' => ['طهي', 'صناعة غذائية', 'تلوين'],
        'season' => 'الخريف',
        'availability' => 'متوفر',
        'price_per_kg' => '$14',
        'min_order' => '10 كجم',
        'img' => '../assets/products/Paprika.webp',
        'attributes' => [
            'اللون' => 'أحمر',
            'النكهة' => 'حلوة إلى حارة',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'مكان بارد ومظلم',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 27,
        'name' => 'البازلاء',
        'scientific_name' => 'Pisum sativum',
        'category' => 'بقوليات',
        'origin' => 'سوريا',
        'description' => 'بقوليات حلوة مغذية مثالية للتطبيقات المختلفة.',
        'uses' => ['غذاء', 'علف حيواني', 'صناعة'],
        'season' => 'الربيع',
        'availability' => 'موسمي',
        'price_per_kg' => '$3',
        'min_order' => '20 كجم',
        'img' => '../assets/products/Peas.webp',
        'attributes' => [
            'اللون' => 'أخضر',
            'البروتين' => '20%',
            'مدة الصلاحية' => '12 شهر',
            'التخزين' => 'مكان بارد وجاف',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 28,
        'name' => 'إكليل الجبل',
        'scientific_name' => 'Rosmarinus officinalis',
        'category' => 'أعشاب',
        'origin' => 'البحر الأبيض المتوسط',
        'description' => 'عشب عطري برائحة الصنوبر، ضروري للطهي والطب.',
        'uses' => ['طهي', 'طب', 'علاج بالروائح'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$22',
        'min_order' => '3 كجم',
        'img' => '../assets/products/Rosemary.webp',
        'attributes' => [
            'اللون' => 'أخضر',
            'النكهة' => 'تشبه الصنوبر، فلفلية',
            'مدة الصلاحية' => '12 شهر',
            'التخزين' => 'حاوية محكمة',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 29,
        'name' => 'السمسم',
        'scientific_name' => 'Sesamum indicum',
        'category' => 'بذور',
        'origin' => 'السودان',
        'description' => 'بذور مغذية غنية بالزيوت، ضرورية للطهي وإنتاج الزيوت.',
        'uses' => ['غذاء', 'إنتاج زيوت', 'خبز'],
        'season' => 'الخريف',
        'availability' => 'متوفر',
        'price_per_kg' => '$8',
        'min_order' => '20 كجم',
        'img' => '../assets/products/Sesame.webp',
        'attributes' => [
            'اللون' => 'أبيض/أسود',
            'محتوى الزيت' => '50%',
            'مدة الصلاحية' => '18 شهر',
            'التخزين' => 'مكان بارد وجاف',
            'الشهادة' => 'درجة غذائية'
        ]
    ],
    [
        'id' => 30,
        'name' => 'الزعتر',
        'scientific_name' => 'Thymus vulgaris',
        'category' => 'أعشاب',
        'origin' => 'البحر الأبيض المتوسط',
        'description' => 'عشب عطري بنكهة ترابية، يستخدم على نطاق واسع في المطبخ المتوسطي.',
        'uses' => ['طهي', 'طب', 'علاج بالروائح'],
        'season' => 'الصيف',
        'availability' => 'متوفر',
        'price_per_kg' => '$20',
        'min_order' => '5 كجم',
        'img' => '../assets/products/Thyme.webp',
        'attributes' => [
            'اللون' => 'أخضر',
            'النكهة' => 'ترابية، نعناعية',
            'مدة الصلاحية' => '12 شهر',
            'التخزين' => 'حاوية محكمة',
            'الشهادة' => 'عضوي'
        ]
    ],
    [
        'id' => 31,
        'name' => 'الكركم',
        'scientific_name' => 'Curcuma longa',
        'category' => 'بهارات',
        'origin' => 'الهند',
        'description' => 'بهار ذهبي بنكهة ترابية وخواص مضادة للالتهابات قوية.',
        'uses' => ['طهي', 'طب', 'تلوين'],
        'season' => 'على مدار العام',
        'availability' => 'متوفر',
        'price_per_kg' => '$16',
        'min_order' => '10 كجم',
        'img' => '../assets/products/Turmeric.webp',
        'attributes' => [
            'اللون' => 'أصفر ذهبي',
            'النكهة' => 'ترابية، مررة قليلاً',
            'مدة الصلاحية' => '24 شهر',
            'التخزين' => 'مكان بارد وجاف',
            'الشهادة' => 'عضوي'
        ]
    ]
];

// Get current category filter
$category_filter = $_GET['category'] ?? 'all';
$search_query = $_GET['search'] ?? '';

// Filter products
$filtered_products = $products;
if ($category_filter !== 'all') {
    $filtered_products = array_filter($filtered_products, function($p) use ($category_filter) {
        return $p['category'] === $category_filter;
    });
}
if ($search_query) {
    $filtered_products = array_filter($filtered_products, function($p) use ($search_query) {
        return stripos($p['name'], $search_query) !== false || 
               stripos($p['description'], $search_query) !== false;
    });
}

// Get unique categories
$categories = array_unique(array_column($products, 'category'));
sort($categories);
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الواردات - كرم لتجارة التوابل</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/rtl.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/ar_product_style.css">
</head>
<body class="rtl">

<!-- ========== HEADER ========== -->
<header class="header" id="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <nav class="top-nav">
                    <a href="index.php" class="active">الرئيسية</a>
                     <a href="imports.php">الواردات</a>
                    <a href="exports.php">الصادرات</a>
                    <a href="products.php" >المتجر</a>
                </nav>
                <div class="header-actions">
                    <a href="<?= $alt_lang_url ?>" class="lang-switch">
                        <i class="fas fa-globe"></i> English
                    </a>
                    <!-- <a href="#" class="btn-login">تسجيل الدخول</a> -->
                    <a href="#contact" class="btn-cta">اتصل بنا</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ========== PRODUCTS HEADER ========== -->
<section class="products-header">
    <div class="container">
        <h1>منتجاتنا المميزة</h1>
        <p>اكتشف مجموعتنا الواسعة من التوابل والأعشاب والمنتجات الزراعية عالية الجودة المصدره من أجمل مناطق العالم.</p>
    </div>
</section>

<!-- ========== FILTERS ========== -->
<section class="filters-section">
    <div class="filters-container">
        <div class="search-box">
            <form method="GET">
                <input type="text" name="search" placeholder="البحث عن المنتجات..." value="<?= htmlspecialchars($search_query) ?>">
            </form>
        </div>
        <div class="category-filter">
            <a href="?category=all" class="filter-btn <?= $category_filter === 'all' ? 'active' : '' ?>">الكل</a>
            <?php foreach ($categories as $category): ?>
                <a href="?category=<?= urlencode($category) ?>" class="filter-btn <?= $category_filter === $category ? 'active' : '' ?>">
                    <?= htmlspecialchars($category) ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== PRODUCTS GRID ========== -->
<section class="products-section">
    <div class="products-grid">
        <?php if (empty($filtered_products)): ?>
            <div class="no-products">
                <i class="fas fa-search"></i>
                <h3>لم يتم العثور على منتجات</h3>
                <p>حاول تعديل البحث أو معايير التصفية.</p>
            </div>
        <?php else: ?>
            <?php foreach ($filtered_products as $product): ?>
                <div class="product-card" onclick="window.location.href='product-details.php?id=<?= $product['id'] ?>'">
                    <div class="product-img">
                        <img src="<?= $product['img'] ?>" alt="<?= htmlspecialchars($product['name']) ?>" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><?= htmlspecialchars($product['name']) ?></h3>
                        <p class="product-scientific"><?= htmlspecialchars($product['scientific_name']) ?></p>
                        <span class="product-category"><?= htmlspecialchars($product['category']) ?></span>
                        <p class="product-origin"><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($product['origin']) ?></p>
                        <div class="product-price"><?= htmlspecialchars($product['price_per_kg']) ?>/كجم</div>
                        <span class="product-availability availability-<?= str_replace(' ', '-', strtolower($product['availability'])) ?>">
                            <?= htmlspecialchars($product['availability']) ?>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="footer">
    <div class="footer-social">
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
    </div>
    <div class="footer-bottom">
        <span>
            العربية &nbsp;|&nbsp;
            <a href="<?= $alt_lang_url ?>">English</a> &nbsp;|&nbsp;
            حقوق الطبع والنشر © كرم
        </span>
    </div>
</footer>

<script src="../js/main.js"></script>
</body>
</html>
