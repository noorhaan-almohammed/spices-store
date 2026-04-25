<?php
$lang = 'en';
$dir = 'ltr';
$alt_lang = 'ar';
$alt_lang_label = 'العربية';
$alt_lang_url = '../ar/product-details.php';

// Products data with attributes
$products = [
    [
        'id' => 1,
        'name' => 'Narcissus',
        'scientific_name' => 'Narcissus tazetta',
        'category' => 'Herbs',
        'origin' => 'Mediterranean',
        'description' => 'Beautiful aromatic flowers with delicate fragrance, commonly used in perfumery and traditional medicine.',
        'full_description' => 'Narcissus tazetta, commonly known as the bunch-flowered narcissus, is a perennial flowering plant prized for its exquisite fragrance and delicate white flowers. This Mediterranean native has been cultivated for centuries for both ornamental and medicinal purposes. The essential oils extracted from narcissus flowers are highly valued in the perfume industry for their unique sweet, floral scent. In traditional medicine, narcissus has been used to treat various ailments including respiratory conditions and skin disorders. Our premium narcissus flowers are carefully harvested at peak bloom to ensure maximum fragrance potency and quality.',
        'uses' => ['Perfumery', 'Traditional Medicine', 'Decorative'],
        'season' => 'Spring',
        'availability' => 'In Stock',
        'price_per_kg' => '$45',
        'min_order' => '5 kg',
        'img' => '../assets/products/Narcissus.webp',
        'gallery' => [
            '../assets/products/Narcissus.webp',
            '../assets/products/Narcissus.webp'
        ],
        'attributes' => [
            'Color' => 'White/Yellow',
            'Fragrance' => 'Strong, Sweet',
            'Shelf Life' => '12 months',
            'Storage' => 'Cool, dry place',
            'Certification' => 'Organic',
            'Harvest Method' => 'Hand-picked',
            'Moisture Content' => '< 12%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Natural fragrance source for perfumes',
            'Anti-inflammatory properties',
            'Skin soothing benefits',
            'Relaxing aromatherapy effects'
        ],
        'specifications' => [
            'Botanical Name' => 'Narcissus tazetta',
            'Family' => 'Amaryllidaceae',
            'Plant Part Used' => 'Flowers',
            'Processing Method' => 'Air-dried',
            'Particle Size' => 'Whole flowers',
            'Foreign Matter' => '< 2%'
        ]
    ],
    [
        'id' => 2,
        'name' => 'White Pepper',
        'scientific_name' => 'Piper nigrum',
        'category' => 'Spices',
        'origin' => 'India',
        'description' => 'Premium white pepper with mild flavor and aromatic properties, perfect for gourmet cooking.',
        'full_description' => 'Our premium white pepper is derived from the same plant as black pepper, but the outer fruit hull is removed before drying, resulting in a milder flavor profile. This meticulous process involves soaking the ripe pepper berries in water for several days to ferment and soften the outer layer, which is then rubbed off, leaving only the inner seed. The resulting white pepper has a delicate, earthy flavor with subtle citrus notes that complements without overpowering dishes. It\'s particularly prized in European cuisine for white sauces, cream dishes, and light-colored foods where the appearance of black specks would be undesirable.',
        'uses' => ['Cooking', 'Food Industry', 'Medicine'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$28',
        'min_order' => '10 kg',
        'img' => '../assets/products/White_Pepper.webp',
        'gallery' => [
            '../assets/products/White_Pepper.webp',
            '../assets/products/White_Pepper.webp'
        ],
        'attributes' => [
            'Color' => 'Creamy White',
            'Flavor' => 'Mild, Earthy',
            'Shelf Life' => '24 months',
            'Storage' => 'Airtight container',
            'Certification' => 'ISO Certified',
            'Piperine Content' => '5-8%',
            'Moisture' => '< 12%',
            'Purity' => '99%'
        ],
        'benefits' => [
            'Enhances digestion',
            'Rich in antioxidants',
            'Anti-inflammatory properties',
            'Supports nutrient absorption'
        ],
        'specifications' => [
            'Botanical Name' => 'Piper nigrum',
            'Family' => 'Piperaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Water-retted, sun-dried',
            'Particle Size' => 'Whole, cracked, or ground',
            'Foreign Matter' => '< 1%'
        ]
    ],
    [
        'id' => 3,
        'name' => 'Alpinia',
        'scientific_name' => 'Alpinia officinarum',
        'category' => 'Herbs',
        'origin' => 'China',
        'description' => 'Aromatic herb with ginger-like flavor, widely used in Asian cuisine and traditional medicine.',
        'full_description' => 'Alpinia officinarum, also known as lesser galangal, is a rhizomatous perennial herb native to southern China. This aromatic spice has been a cornerstone of traditional Chinese medicine and Asian cuisine for over a thousand years. The rhizomes have a complex flavor profile that combines ginger-like spiciness with pine-like notes and a hint of citrus. In traditional medicine, alpinia is valued for its digestive properties and ability to treat stomach ailments. Our premium alpinia rhizomes are harvested at optimal maturity to ensure maximum flavor and medicinal potency.',
        'uses' => ['Culinary', 'Medicinal', 'Aromatherapy'],
        'season' => 'Year-round',
        'availability' => 'Limited',
        'price_per_kg' => '$35',
        'min_order' => '5 kg',
        'img' => '../assets/products/Alpinia.webp',
        'gallery' => [
            '../assets/products/Alpinia.webp',
            '../assets/products/Alpinia.webp'
        ],
        'attributes' => [
            'Color' => 'Brown',
            'Flavor' => 'Spicy, Warm',
            'Shelf Life' => '18 months',
            'Storage' => 'Dry place',
            'Certification' => 'Organic',
            'Essential Oil Content' => '1-2%',
            'Moisture' => '< 14%',
            'Fiber Content' => '< 15%'
        ],
        'benefits' => [
            'Supports digestive health',
            'Anti-inflammatory effects',
            'Antimicrobial properties',
            'Traditional remedy for colds'
        ],
        'specifications' => [
            'Botanical Name' => 'Alpinia officinarum',
            'Family' => 'Zingiberaceae',
            'Plant Part Used' => 'Rhizomes',
            'Processing Method' => 'Sun-dried',
            'Particle Size' => 'Sliced or powdered',
            'Ash Content' => '< 8%'
        ]
    ],
    [
        'id' => 4,
        'name' => 'Anise',
        'scientific_name' => 'Pimpinella anisum',
        'category' => 'Spices',
        'origin' => 'Egypt',
        'description' => 'Sweet, aromatic seeds with licorice-like flavor, essential for baking and beverages.',
        'full_description' => 'Anise, also known as aniseed, is an annual herb cultivated for its highly aromatic seeds. The distinctive licorice-like flavor comes from anethole, an essential oil that makes up 2-3% of the seed\'s composition. Egyptian anise is particularly prized for its high essential oil content and superior flavor profile. The seeds have been used since ancient times in both culinary and medicinal applications. In the kitchen, anise is indispensable in breads, cakes, and confectionery, while in traditional medicine, it\'s renowned for its digestive and respiratory benefits. Our premium anise seeds are carefully selected and processed to preserve their aromatic oils.',
        'uses' => ['Baking', 'Beverages', 'Medicine'],
        'season' => 'Summer',
        'availability' => 'In Stock',
        'price_per_kg' => '$22',
        'min_order' => '10 kg',
        'img' => '../assets/products/Anise.webp',
        'gallery' => [
            '../assets/products/Anise.webp',
            '../assets/products/Anise.webp'
        ],
        'attributes' => [
            'Color' => 'Greenish-brown',
            'Flavor' => 'Sweet, Licorice',
            'Shelf Life' => '24 months',
            'Storage' => 'Cool, dry place',
            'Certification' => 'Food Grade',
            'Anethole Content' => '2-3%',
            'Moisture' => '< 12%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Aids digestion',
            'Relieves respiratory congestion',
            'Natural expectorant',
            'Antimicrobial properties'
        ],
        'specifications' => [
            'Botanical Name' => 'Pimpinella anisum',
            'Family' => 'Apiaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Sun-dried',
            'Particle Size' => 'Whole or ground',
            'Foreign Matter' => '< 1%'
        ]
    ],
    [
        'id' => 5,
        'name' => 'Basil',
        'scientific_name' => 'Ocimum basilicum',
        'category' => 'Herbs',
        'origin' => 'Mediterranean',
        'description' => 'Fresh aromatic herb essential for Mediterranean and Asian cuisines.',
        'full_description' => 'Basil, known as the "king of herbs," is one of the most versatile and beloved culinary herbs worldwide. Native to tropical regions from central Africa to Southeast Asia, basil has been cultivated for over 5,000 years. The Mediterranean variety we offer is particularly prized for its sweet, aromatic flavor with notes of clove and anise. Our premium basil is carefully harvested and dried to preserve its essential oils, which include linalool, methyl chavicol, and eugenol. These compounds not only provide basil\'s distinctive flavor but also contribute to its medicinal properties, including anti-inflammatory and antioxidant effects.',
        'uses' => ['Cooking', 'Medicine', 'Aromatherapy'],
        'season' => 'Summer',
        'availability' => 'In Stock',
        'price_per_kg' => '$18',
        'min_order' => '3 kg',
        'img' => '../assets/products/Basil.webp',
        'gallery' => [
            '../assets/products/Basil.webp',
            '../assets/products/Basil.webp'
        ],
        'attributes' => [
            'Color' => 'Green',
            'Flavor' => 'Sweet, Peppery',
            'Shelf Life' => '6 months (dried)',
            'Storage' => 'Airtight container',
            'Certification' => 'Organic',
            'Essential Oil Content' => '0.5-1%',
            'Moisture' => '< 12%',
            'Leaf Size' => 'Medium to large'
        ],
        'benefits' => [
            'Rich in antioxidants',
            'Anti-inflammatory properties',
            'Supports cardiovascular health',
            'Natural stress reliever'
        ],
        'specifications' => [
            'Botanical Name' => 'Ocimum basilicum',
            'Family' => 'Lamiaceae',
            'Plant Part Used' => 'Leaves',
            'Processing Method' => 'Air-dried',
            'Particle Size' => 'Whole leaves or crushed',
            'Stem Content' => '< 5%'
        ]
    ],
    [
        'id' => 6,
        'name' => 'Bay Leaves',
        'scientific_name' => 'Laurus nobilis',
        'category' => 'Herbs',
        'origin' => 'Turkey',
        'description' => 'Aromatic leaves that add depth to soups, stews, and sauces.',
        'full_description' => 'Bay leaves are the aromatic leaves of the bay laurel tree, an evergreen native to the Mediterranean region. These leaves have been used in cooking and medicine since ancient times, with Greek and Roman scholars wearing laurel wreaths to symbolize wisdom and victory. The leaves contain essential oils including cineole, eugenol, and geraniol, which provide their distinctive aroma and flavor. Our premium Turkish bay leaves are carefully selected for their rich green color and strong aroma. They are harvested at the optimal time and air-dried to preserve their flavor compounds.',
        'uses' => ['Cooking', 'Medicine', 'Preservation'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$25',
        'min_order' => '5 kg',
        'img' => '../assets/products/Bay_Leaves.webp',
        'gallery' => [
            '../assets/products/Bay_Leaves.webp',
            '../assets/products/Bay_Leaves.webp'
        ],
        'attributes' => [
            'Color' => 'Dark Green',
            'Flavor' => 'Herbal, Slightly Bitter',
            'Shelf Life' => '12 months',
            'Storage' => 'Dry place',
            'Certification' => 'Food Grade',
            'Essential Oil Content' => '1-3%',
            'Moisture' => '< 12%',
            'Leaf Size' => '5-10 cm'
        ],
        'benefits' => [
            'Aids digestion',
            'Anti-inflammatory effects',
            'Supports heart health',
            'Natural food preservative'
        ],
        'specifications' => [
            'Botanical Name' => 'Laurus nobilis',
            'Family' => 'Lauraceae',
            'Plant Part Used' => 'Leaves',
            'Processing Method' => 'Air-dried',
            'Particle Size' => 'Whole leaves',
            'Broken Leaves' => '< 10%'
        ]
    ],
    [
        'id' => 7,
        'name' => 'Beans',
        'scientific_name' => 'Phaseolus vulgaris',
        'category' => 'Legumes',
        'origin' => 'Syria',
        'description' => 'High-quality beans rich in protein and essential nutrients.',
        'full_description' => 'Our premium Syrian beans are cultivated in the fertile plains of Syria, where the climate and soil conditions produce exceptionally flavorful and nutritious legumes. These beans are a staple food source, providing high-quality protein, dietary fiber, and essential minerals including iron, magnesium, and folate. Syrian beans are particularly prized for their creamy texture and earthy flavor. They are carefully harvested and processed to maintain their nutritional integrity and cooking quality. Our beans are non-GMO and grown using sustainable agricultural practices.',
        'uses' => ['Food', 'Animal Feed', 'Industry'],
        'season' => 'Autumn',
        'availability' => 'In Stock',
        'price_per_kg' => '$3',
        'min_order' => '25 kg',
        'img' => '../assets/products/Beans.webp',
        'gallery' => [
            '../assets/products/Beans.webp',
            '../assets/products/Beans.webp'
        ],
        'attributes' => [
            'Color' => 'Various',
            'Protein' => '22%',
            'Shelf Life' => '18 months',
            'Storage' => 'Dry, cool place',
            'Certification' => 'Food Grade',
            'Moisture' => '< 14%',
            'Foreign Material' => '< 1%',
            'Broken Kernels' => '< 5%'
        ],
        'benefits' => [
            'High protein content',
            'Rich in dietary fiber',
            'Supports heart health',
            'Low glycemic index'
        ],
        'specifications' => [
            'Botanical Name' => 'Phaseolus vulgaris',
            'Family' => 'Fabaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Cleaned and sorted',
            'Particle Size' => 'Whole seeds',
            'Test Weight' => '> 75 kg/hl'
        ]
    ],
    [
        'id' => 8,
        'name' => 'Black Pepper',
        'scientific_name' => 'Piper nigrum',
        'category' => 'Spices',
        'origin' => 'Vietnam',
        'description' => 'The king of spices with bold, pungent flavor and numerous health benefits.',
        'full_description' => 'Black pepper, often called the "king of spices," is one of the most widely traded spices in the world. Our premium Vietnamese black pepper is grown in the ideal climate conditions of the Central Highlands, where the rich volcanic soil and abundant rainfall produce pepper berries with exceptional flavor and high piperine content. The pepper berries are hand-picked when fully mature and carefully sun-dried to develop their characteristic wrinkled black skin and intense pungent flavor. This spice has been prized for thousands of years, not only for its culinary uses but also for its medicinal properties.',
        'uses' => ['Cooking', 'Medicine', 'Preservation'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$15',
        'min_order' => '10 kg',
        'img' => '../assets/products/Black_Pepper.webp',
        'gallery' => [
            '../assets/products/Black_Pepper.webp',
            '../assets/products/Black_Pepper.webp'
        ],
        'attributes' => [
            'Color' => 'Black',
            'Flavor' => 'Pungent, Spicy',
            'Shelf Life' => '24 months',
            'Storage' => 'Airtight container',
            'Certification' => 'ISO Certified',
            'Piperine Content' => '5-9%',
            'Moisture' => '< 12%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Enhances nutrient absorption',
            'Rich in antioxidants',
            'Anti-inflammatory properties',
            'Supports digestive health'
        ],
        'specifications' => [
            'Botanical Name' => 'Piper nigrum',
            'Family' => 'Piperaceae',
            'Plant Part Used' => 'Dried berries',
            'Processing Method' => 'Sun-dried',
            'Particle Size' => 'Whole, cracked, or ground',
            'Foreign Matter' => '< 1%'
        ]
    ],
    [
        'id' => 9,
        'name' => 'Broad Bean',
        'scientific_name' => 'Vicia faba',
        'category' => 'Legumes',
        'origin' => 'Syria',
        'description' => 'Nutritious broad beans rich in protein and dietary fiber.',
        'full_description' => 'Broad beans, also known as fava beans, are among the oldest domesticated food crops. Our Syrian broad beans are cultivated in traditional farming regions where they have been grown for millennia. These large, flat beans have a distinctive nutty flavor and buttery texture when cooked. They are an excellent source of plant-based protein, dietary fiber, and essential nutrients including folate, magnesium, and iron. Our broad beans are carefully selected and processed to ensure consistent quality and cooking performance.',
        'uses' => ['Food', 'Animal Feed', 'Industry'],
        'season' => 'Spring',
        'availability' => 'Seasonal',
        'price_per_kg' => '$4',
        'min_order' => '20 kg',
        'img' => '../assets/products/Broad_Bean.webp',
        'gallery' => [
            '../assets/products/Broad_Bean.webp',
            '../assets/products/Broad_Bean.webp'
        ],
        'attributes' => [
            'Color' => 'Green/Brown',
            'Protein' => '26%',
            'Shelf Life' => '12 months',
            'Storage' => 'Cool, dry place',
            'Certification' => 'Food Grade',
            'Moisture' => '< 14%',
            'Foreign Material' => '< 1%',
            'Test Weight' => '> 70 kg/hl'
        ],
        'benefits' => [
            'High protein content',
            'Rich in dietary fiber',
            'Supports cardiovascular health',
            'Good source of folate'
        ],
        'specifications' => [
            'Botanical Name' => 'Vicia faba',
            'Family' => 'Fabaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Cleaned and sorted',
            'Particle Size' => 'Whole seeds',
            '1000 Kernel Weight' => '> 1000g'
        ]
    ],
    [
        'id' => 10,
        'name' => 'Chamomile',
        'scientific_name' => 'Matricaria chamomilla',
        'category' => 'Herbs',
        'origin' => 'Egypt',
        'description' => 'Calming herb with apple-like aroma, widely used for teas and relaxation.',
        'full_description' => 'Chamomile is one of the most ancient and beloved medicinal herbs, known for its calming properties and delicate apple-like fragrance. Our premium Egyptian chamomile flowers are carefully harvested at peak bloom to ensure maximum essential oil content, particularly bisabolol and chamazulene, which give chamomile its characteristic blue color and therapeutic properties. The daisy-like flowers have been used for centuries in traditional medicine to treat insomnia, anxiety, digestive issues, and skin conditions. Our chamomile is organically grown and hand-picked to preserve the delicate flower heads.',
        'uses' => ['Tea', 'Medicine', 'Cosmetics'],
        'season' => 'Summer',
        'availability' => 'In Stock',
        'price_per_kg' => '$30',
        'min_order' => '5 kg',
        'img' => '../assets/products/Chamomile.webp',
        'gallery' => [
            '../assets/products/Chamomile.webp',
            '../assets/products/Chamomile.webp'
        ],
        'attributes' => [
            'Color' => 'White/Yellow',
            'Flavor' => 'Apple-like, Sweet',
            'Shelf Life' => '18 months',
            'Storage' => 'Dry place',
            'Certification' => 'Organic',
            'Essential Oil Content' => '0.5-1.5%',
            'Moisture' => '< 12%',
            'Flower Integrity' => '> 90%'
        ],
        'benefits' => [
            'Promotes relaxation and sleep',
            'Anti-inflammatory properties',
            'Supports digestive health',
            'Skin soothing effects'
        ],
        'specifications' => [
            'Botanical Name' => 'Matricaria chamomilla',
            'Family' => 'Asteraceae',
            'Plant Part Used' => 'Flower heads',
            'Processing Method' => 'Air-dried',
            'Particle Size' => 'Whole flowers',
            'Stem Content' => '< 5%'
        ]
    ],
    [
        'id' => 11,
        'name' => 'Chickpeas',
        'scientific_name' => 'Cicer arietinum',
        'category' => 'Legumes',
        'origin' => 'Syria',
        'description' => 'Versatile legumes perfect for hummus, salads, and Middle Eastern dishes.',
        'full_description' => 'Chickpeas, also known as garbanzo beans, are one of the earliest cultivated legumes, with archaeological evidence dating back over 7,500 years. Our Syrian chickpeas are grown in the traditional heartland of chickpea cultivation, where generations of farming expertise have perfected the art of growing these nutritious legumes. These round, beige-colored beans have a nutty flavor and creamy texture that makes them perfect for hummus, falafel, salads, and countless other dishes. Chickpeas are an excellent source of plant-based protein, dietary fiber, and essential minerals.',
        'uses' => ['Food', 'Industry', 'Animal Feed'],
        'season' => 'Autumn',
        'availability' => 'In Stock',
        'price_per_kg' => '$2.5',
        'min_order' => '25 kg',
        'img' => '../assets/products/Chickpeas.webp',
        'gallery' => [
            '../assets/products/Chickpeas.webp',
            '../assets/products/Chickpeas.webp'
        ],
        'attributes' => [
            'Color' => 'Beige',
            'Protein' => '20%',
            'Shelf Life' => '24 months',
            'Storage' => 'Dry place',
            'Certification' => 'Food Grade',
            'Moisture' => '< 12%',
            'Foreign Material' => '< 0.5%',
            'Seed Size' => '8-10mm'
        ],
        'benefits' => [
            'High in plant-based protein',
            'Rich in dietary fiber',
            'Supports blood sugar control',
            'Good source of folate'
        ],
        'specifications' => [
            'Botanical Name' => 'Cicer arietinum',
            'Family' => 'Fabaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Cleaned and sorted',
            'Particle Size' => 'Whole seeds',
            '1000 Kernel Weight' => '> 250g'
        ]
    ],
    [
        'id' => 12,
        'name' => 'Clove',
        'scientific_name' => 'Syzygium aromaticum',
        'category' => 'Spices',
        'origin' => 'Indonesia',
        'description' => 'Intensely aromatic spice with warm, sweet flavor and medicinal properties.',
        'full_description' => 'Cloves are the aromatic dried flower buds of the clove tree, native to the Maluku Islands in Indonesia. Our premium Indonesian cloves are carefully harvested when the buds turn from green to pink, just before they open, ensuring maximum flavor and essential oil content. The intense, warm, sweet flavor comes from eugenol, which makes up 70-85% of the essential oil content. Cloves have been prized for millennia not only as a spice but also for their medicinal properties, including analgesic and antiseptic effects. Our cloves are hand-sorted to ensure uniform size and quality.',
        'uses' => ['Cooking', 'Medicine', 'Dentistry'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$32',
        'min_order' => '5 kg',
        'img' => '../assets/products/Clove.webp',
        'gallery' => [
            '../assets/products/Clove.webp',
            '../assets/products/Clove.webp'
        ],
        'attributes' => [
            'Color' => 'Dark Brown',
            'Flavor' => 'Strong, Sweet',
            'Shelf Life' => '36 months',
            'Storage' => 'Airtight container',
            'Certification' => 'Food Grade',
            'Eugenol Content' => '70-85%',
            'Moisture' => '< 12%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Natural analgesic properties',
            'Powerful antioxidant',
            'Anti-inflammatory effects',
            'Supports oral health'
        ],
        'specifications' => [
            'Botanical Name' => 'Syzygium aromaticum',
            'Family' => 'Myrtaceae',
            'Plant Part Used' => 'Dried flower buds',
            'Processing Method' => 'Sun-dried',
            'Particle Size' => 'Whole buds',
            'Foreign Matter' => '< 1%'
        ]
    ],
    [
        'id' => 13,
        'name' => 'Cinnamon',
        'scientific_name' => 'Cinnamomum verum',
        'category' => 'Spices',
        'origin' => 'Sri Lanka',
        'description' => 'Sweet, warming spice with delicate flavor and numerous health benefits.',
        'full_description' => 'Ceylon cinnamon, known as "true cinnamon," is the inner bark of the Cinnamomum verum tree, native to Sri Lanka. Our premium cinnamon is carefully harvested from trees that are at least two years old, with the bark peeled in thin strips during the rainy season when it\'s most pliable. The delicate, sweet flavor and complex aroma set it apart from the more common cassia cinnamon. Ceylon cinnamon has lower coumarin content, making it safer for regular consumption. The quills are hand-rolled and dried to preserve their characteristic flavor and medicinal properties.',
        'uses' => ['Cooking', 'Baking', 'Medicine'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$20',
        'min_order' => '10 kg',
        'img' => '../assets/products/Cinnamon.webp',
        'gallery' => [
            '../assets/products/Cinnamon.webp',
            '../assets/products/Cinnamon.webp'
        ],
        'attributes' => [
            'Color' => 'Brown',
            'Flavor' => 'Sweet, Warm',
            'Shelf Life' => '24 months',
            'Storage' => 'Cool, dry place',
            'Certification' => 'Organic',
            'Cinnamaldehyde Content' => '55-65%',
            'Moisture' => '< 12%',
            'Coumarin' => '< 0.02%'
        ],
        'benefits' => [
            'Regulates blood sugar',
            'Powerful antioxidant',
            'Anti-inflammatory properties',
            'Supports heart health'
        ],
        'specifications' => [
            'Botanical Name' => 'Cinnamomum verum',
            'Family' => 'Lauraceae',
            'Plant Part Used' => 'Inner bark',
            'Processing Method' => 'Air-dried quills',
            'Particle Size' => 'Quills or ground',
            'Bark Thickness' => '0.5-1mm'
        ]
    ],
    [
        'id' => 14,
        'name' => 'Coffee',
        'scientific_name' => 'Coffea arabica',
        'category' => 'Beverages',
        'origin' => 'Colombia',
        'description' => 'Premium arabica coffee beans with rich flavor and aroma.',
        'full_description' => 'Our premium Colombian arabica coffee beans are grown in the ideal high-altitude conditions of the Colombian coffee region, where the combination of volcanic soil, perfect climate, and traditional farming methods produces exceptional coffee. These beans are hand-picked at peak ripeness and processed using traditional methods to preserve their complex flavor profile. Colombian arabica is renowned for its balanced acidity, medium body, and rich flavor notes including chocolate, caramel, and citrus. Our beans are carefully roasted to highlight their natural characteristics and provide a superior coffee experience.',
        'uses' => ['Beverage', 'Food Industry', 'Cosmetics'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$25',
        'min_order' => '10 kg',
        'img' => '../assets/products/Coffee.webp',
        'gallery' => [
            '../assets/products/Coffee.webp',
            '../assets/products/Coffee.webp'
        ],
        'attributes' => [
            'Color' => 'Brown',
            'Flavor' => 'Rich, Complex',
            'Shelf Life' => '12 months',
            'Storage' => 'Cool, dark place',
            'Certification' => 'Fair Trade',
            'Caffeine Content' => '1.2-1.5%',
            'Moisture' => '< 12%',
            'Acidity' => 'Medium'
        ],
        'benefits' => [
            'Enhances mental alertness',
            'Rich in antioxidants',
            'Supports physical performance',
            'May reduce disease risk'
        ],
        'specifications' => [
            'Botanical Name' => 'Coffea arabica',
            'Family' => 'Rubiaceae',
            'Plant Part Used' => 'Roasted beans',
            'Processing Method' => 'Washed and sun-dried',
            'Particle Size' => 'Whole beans',
            'Defects' => '< 5%'
        ]
    ],
    [
        'id' => 15,
        'name' => 'Coriander',
        'scientific_name' => 'Coriandrum sativum',
        'category' => 'Spices',
        'origin' => 'India',
        'description' => 'Versatile spice with citrusy notes, essential in many cuisines.',
        'full_description' => 'Coriander is one of the world\'s oldest spices, with evidence of its use dating back to 5000 BCE. Our premium Indian coriander seeds are carefully harvested when fully mature to ensure maximum flavor and essential oil content. The seeds have a complex flavor profile that combines citrus, floral, and slightly sweet notes, making them incredibly versatile in cooking. Coriander is used in virtually every cuisine worldwide, from Indian curries to Mexican salsas to European pickles. The seeds are also valued for their medicinal properties, including digestive and anti-inflammatory benefits.',
        'uses' => ['Cooking', 'Medicine', 'Perfumery'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$8',
        'min_order' => '10 kg',
        'img' => '../assets/products/Coriander.webp',
        'gallery' => [
            '../assets/products/Coriander.webp',
            '../assets/products/Coriander.webp'
        ],
        'attributes' => [
            'Color' => 'Brown',
            'Flavor' => 'Citrusy, Warm',
            'Shelf Life' => '24 months',
            'Storage' => 'Airtight container',
            'Certification' => 'Food Grade',
            'Essential Oil Content' => '0.2-1.8%',
            'Moisture' => '< 12%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Aids digestion',
            'Anti-inflammatory properties',
            'Rich in antioxidants',
            'Supports blood sugar control'
        ],
        'specifications' => [
            'Botanical Name' => 'Coriandrum sativum',
            'Family' => 'Apiaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Sun-dried',
            'Particle Size' => 'Whole or ground',
            'Foreign Matter' => '< 1%'
        ]
    ],
    [
        'id' => 16,
        'name' => 'Cowpeas',
        'scientific_name' => 'Vigna unguiculata',
        'category' => 'Legumes',
        'origin' => 'Nigeria',
        'description' => 'Nutritious legumes rich in protein and essential minerals.',
        'full_description' => 'Cowpeas, also known as black-eyed peas, are a drought-tolerant legume that has been cultivated in Africa for thousands of years. Our premium Nigerian cowpeas are grown using traditional farming methods that have been perfected over generations. These cream-colored beans with their distinctive black "eye" are not only nutritious but also culturally significant throughout Africa and the American South. Cowpeas are an excellent source of plant-based protein, dietary fiber, and essential minerals including iron, magnesium, and zinc.',
        'uses' => ['Food', 'Animal Feed', 'Industry'],
        'season' => 'Autumn',
        'availability' => 'In Stock',
        'price_per_kg' => '$2',
        'min_order' => '25 kg',
        'img' => '../assets/products/Cowpeas.webp',
        'gallery' => [
            '../assets/products/Cowpeas.webp',
            '../assets/products/Cowpeas.webp'
        ],
        'attributes' => [
            'Color' => 'Black/White',
            'Protein' => '24%',
            'Shelf Life' => '18 months',
            'Storage' => 'Dry place',
            'Certification' => 'Food Grade',
            'Moisture' => '< 14%',
            'Foreign Material' => '< 1%',
            'Test Weight' => '> 75 kg/hl'
        ],
        'benefits' => [
            'High protein content',
            'Rich in dietary fiber',
            'Supports digestive health',
            'Low glycemic index'
        ],
        'specifications' => [
            'Botanical Name' => 'Vigna unguiculata',
            'Family' => 'Fabaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Cleaned and sorted',
            'Particle Size' => 'Whole seeds',
            '1000 Kernel Weight' => '> 200g'
        ]
    ],
    [
        'id' => 17,
        'name' => 'Cumin',
        'scientific_name' => 'Cuminum cyminum',
        'category' => 'Spices',
        'origin' => 'India',
        'description' => 'Earthy, warm spice fundamental to Middle Eastern and Indian cuisines.',
        'full_description' => 'Cumin is one of the most ancient spices, with evidence of its use in Egyptian cooking dating back to the second millennium BCE. Our premium Indian cumin seeds are carefully harvested and processed to preserve their distinctive flavor and aroma. The seeds have an earthy, warm flavor with citrus undertones that becomes more pronounced when toasted. Cumin is fundamental to countless cuisines worldwide, particularly Indian, Middle Eastern, Mexican, and North African cooking. The spice is also valued for its medicinal properties, including digestive and respiratory benefits.',
        'uses' => ['Cooking', 'Medicine', 'Food Industry'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$12',
        'min_order' => '10 kg',
        'img' => '../assets/products/Cuminum.webp',
        'gallery' => [
            '../assets/products/Cuminum.webp',
            '../assets/products/Cuminum.webp'
        ],
        'attributes' => [
            'Color' => 'Brown',
            'Flavor' => 'Earthy, Warm',
            'Shelf Life' => '24 months',
            'Storage' => 'Airtight container',
            'Certification' => 'Food Grade',
            'Essential Oil Content' => '2.5-4%',
            'Moisture' => '< 10%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Enhances digestion',
            'Rich in iron',
            'Anti-inflammatory properties',
            'Supports immune function'
        ],
        'specifications' => [
            'Botanical Name' => 'Cuminum cyminum',
            'Family' => 'Apiaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Sun-dried',
            'Particle Size' => 'Whole or ground',
            'Foreign Matter' => '< 1%'
        ]
    ],
    [
        'id' => 18,
        'name' => 'Damask Rose',
        'scientific_name' => 'Rosa damascena',
        'category' => 'Herbs',
        'origin' => 'Syria',
        'description' => 'Exquisite fragrant roses used for perfumes, teas, and cosmetics.',
        'full_description' => 'The Damask rose is one of the most prized rose varieties in the world, renowned for its intense fragrance and beautiful pink blooms. Our Syrian Damask roses are grown in the traditional rose-growing regions where the climate and soil conditions produce flowers with exceptional essential oil content. The roses are hand-picked in the early morning when their fragrance is at its peak, then carefully dried to preserve their delicate petals and aromatic compounds. Damask roses are the primary source of rose oil and rose water, used extensively in perfumery, cosmetics, and culinary applications.',
        'uses' => ['Perfumery', 'Tea', 'Cosmetics'],
        'season' => 'Spring',
        'availability' => 'Seasonal',
        'price_per_kg' => '$150',
        'min_order' => '2 kg',
        'img' => '../assets/products/Damask_rose.webp',
        'gallery' => [
            '../assets/products/Damask_rose.webp',
            '../assets/products/Damask_rose.webp'
        ],
        'attributes' => [
            'Color' => 'Pink/Red',
            'Fragrance' => 'Intense, Floral',
            'Shelf Life' => '12 months',
            'Storage' => 'Cool, dry place',
            'Certification' => 'Organic',
            'Essential Oil Content' => '0.03-0.04%',
            'Moisture' => '< 12%',
            'Petal Integrity' => '> 90%'
        ],
        'benefits' => [
            'Natural mood enhancer',
            'Skin soothing properties',
            'Anti-inflammatory effects',
            'Rich in antioxidants'
        ],
        'specifications' => [
            'Botanical Name' => 'Rosa damascena',
            'Family' => 'Rosaceae',
            'Plant Part Used' => 'Dried petals',
            'Processing Method' => 'Air-dried',
            'Particle Size' => 'Whole petals',
            'Stem Content' => '< 2%'
        ]
    ],
    [
        'id' => 19,
        'name' => 'Fennel',
        'scientific_name' => 'Foeniculum vulgare',
        'category' => 'Herbs',
        'origin' => 'Mediterranean',
        'description' => 'Aromatic herb with licorice-like flavor, used in cooking and medicine.',
        'full_description' => 'Fennel is a hardy, perennial herb with feathery leaves and yellow flowers that has been cultivated since ancient times. Our Mediterranean fennel seeds are carefully harvested when fully mature to ensure maximum flavor and essential oil content. The seeds have a distinctive licorice-like flavor that is both sweet and slightly bitter, making them popular in both sweet and savory dishes. Fennel has been used traditionally for digestive health, respiratory conditions, and as a galactagogue for nursing mothers. The seeds are also valued in modern herbal medicine for their numerous health benefits.',
        'uses' => ['Cooking', 'Medicine', 'Beverages'],
        'season' => 'Summer',
        'availability' => 'In Stock',
        'price_per_kg' => '$15',
        'min_order' => '5 kg',
        'img' => '../assets/products/Fennel.webp',
        'gallery' => [
            '../assets/products/Fennel.webp',
            '../assets/products/Fennel.webp'
        ],
        'attributes' => [
            'Color' => 'Green',
            'Flavor' => 'Licorice-like',
            'Shelf Life' => '18 months',
            'Storage' => 'Dry place',
            'Certification' => 'Organic',
            'Essential Oil Content' => '2-4%',
            'Moisture' => '< 12%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Supports digestive health',
            'Natural diuretic',
            'Rich in fiber',
            'Anti-inflammatory properties'
        ],
        'specifications' => [
            'Botanical Name' => 'Foeniculum vulgare',
            'Family' => 'Apiaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Sun-dried',
            'Particle Size' => 'Whole or ground',
            'Foreign Matter' => '< 1%'
        ]
    ],
    [
        'id' => 20,
        'name' => 'Fenugreek',
        'scientific_name' => 'Trigonella foenum-graecum',
        'category' => 'Herbs',
        'origin' => 'India',
        'description' => 'Nutritious herb with maple-like flavor, used in cooking and traditional medicine.',
        'full_description' => 'Fenugreek is an ancient herb that has been used for both culinary and medicinal purposes for thousands of years. Our premium Indian fenugreek seeds are carefully harvested and processed to preserve their distinctive maple-like flavor and numerous health benefits. The small, yellow-brown seeds have a complex flavor profile that combines sweet, nutty, and slightly bitter notes. Fenugreek is a staple in Indian and Middle Eastern cuisines and is also valued in traditional medicine for its ability to support lactation, regulate blood sugar, and provide numerous other health benefits.',
        'uses' => ['Cooking', 'Medicine', 'Industry'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$10',
        'min_order' => '10 kg',
        'img' => '../assets/products/Fenugreek.webp',
        'gallery' => [
            '../assets/products/Fenugreek.webp',
            '../assets/products/Fenugreek.webp'
        ],
        'attributes' => [
            'Color' => 'Yellow-brown',
            'Flavor' => 'Maple-like, Bitter',
            'Shelf Life' => '24 months',
            'Storage' => 'Airtight container',
            'Certification' => 'Food Grade',
            'Protein Content' => '25-30%',
            'Moisture' => '< 12%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Supports lactation',
            'Regulates blood sugar',
            'Rich in protein',
            'Anti-inflammatory properties'
        ],
        'specifications' => [
            'Botanical Name' => 'Trigonella foenum-graecum',
            'Family' => 'Fabaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Sun-dried',
            'Particle Size' => 'Whole or ground',
            'Foreign Matter' => '< 1%'
        ]
    ],
    [
        'id' => 21,
        'name' => 'Ginger',
        'scientific_name' => 'Zingiber officinale',
        'category' => 'Spices',
        'origin' => 'China',
        'description' => 'Warming spice with pungent flavor and powerful medicinal properties.',
        'full_description' => 'Ginger is one of the healthiest and most delicious spices on the planet. Our premium Chinese ginger is grown in the ideal climate conditions of southern China, where the rich soil and abundant rainfall produce rhizomes with exceptional flavor and high gingerol content. The rhizomes are carefully harvested when mature and processed to preserve their pungent, spicy flavor and numerous health benefits. Ginger has been used for thousands of years in both cooking and traditional medicine, prized for its digestive, anti-inflammatory, and immune-boosting properties.',
        'uses' => ['Cooking', 'Medicine', 'Beverages'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$18',
        'min_order' => '10 kg',
        'img' => '../assets/products/Ginger.webp',
        'gallery' => [
            '../assets/products/Ginger.webp',
            '../assets/products/Ginger.webp'
        ],
        'attributes' => [
            'Color' => 'Pale Yellow',
            'Flavor' => 'Pungent, Spicy',
            'Shelf Life' => '12 months',
            'Storage' => 'Cool, dry place',
            'Certification' => 'Organic',
            'Gingerol Content' => '1-3%',
            'Moisture' => '< 12%',
            'Fiber Content' => '< 5%'
        ],
        'benefits' => [
            'Powerful anti-inflammatory',
            'Aids digestion',
            'Supports immune function',
            'Natural pain reliever'
        ],
        'specifications' => [
            'Botanical Name' => 'Zingiber officinale',
            'Family' => 'Zingiberaceae',
            'Plant Part Used' => 'Rhizomes',
            'Processing Method' => 'Sun-dried',
            'Particle Size' => 'Sliced or powdered',
            'Foreign Matter' => '< 1%'
        ]
    ],
    [
        'id' => 22,
        'name' => 'Lemon',
        'scientific_name' => 'Citrus limon',
        'category' => 'Fruits',
        'origin' => 'Syria',
        'description' => 'Fresh citrus fruits with bright flavor and aromatic zest.',
        'full_description' => 'Our premium Syrian lemons are grown in the Mediterranean climate that produces some of the world\'s finest citrus fruits. These bright yellow fruits are prized for their juicy pulp and aromatic zest, which contain high levels of essential oils and vitamin C. Syrian lemons have a perfect balance of acidity and sweetness, making them ideal for both culinary and beverage applications. The fruits are carefully hand-picked at peak ripeness and processed to preserve their fresh flavor and nutritional value.',
        'uses' => ['Food', 'Beverages', 'Cleaning'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$3',
        'min_order' => '15 kg',
        'img' => '../assets/products/Lemon.webp',
        'gallery' => [
            '../assets/products/Lemon.webp',
            '../assets/products/Lemon.webp'
        ],
        'attributes' => [
            'Color' => 'Yellow',
            'Flavor' => 'Citrus, Tart',
            'Shelf Life' => '4 weeks',
            'Storage' => 'Refrigerated',
            'Certification' => 'Organic',
            'Vitamin C Content' => '50-60 mg/100g',
            'Juice Content' => '30-40%',
            'Acidity' => '5-6%'
        ],
        'benefits' => [
            'Rich in vitamin C',
            'Supports immune function',
            'Natural detoxifier',
            'Aids digestion'
        ],
        'specifications' => [
            'Botanical Name' => 'Citrus limon',
            'Family' => 'Rutaceae',
            'Plant Part Used' => 'Whole fruit',
            'Processing Method' => 'Fresh',
            'Particle Size' => 'Whole fruit',
            'Size' => '6-8cm diameter'
        ]
    ],
    [
        'id' => 23,
        'name' => 'Lentils',
        'scientific_name' => 'Lens culinaris',
        'category' => 'Legumes',
        'origin' => 'Canada',
        'description' => 'Nutritious legumes high in protein and essential minerals.',
        'full_description' => 'Lentils are one of the world\'s oldest cultivated crops, with archaeological evidence dating back over 9,000 years. Our premium Canadian lentils are grown in the ideal climate conditions of the Canadian prairies, where the long summer days and cool nights produce lentils with exceptional quality and nutritional value. These small, disk-shaped legumes come in various colors including green, brown, red, and black, each with its own unique flavor and cooking characteristics. Lentils are an excellent source of plant-based protein, dietary fiber, and essential minerals.',
        'uses' => ['Food', 'Industry', 'Animal Feed'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$2.5',
        'min_order' => '25 kg',
        'img' => '../assets/products/Lentils.webp',
        'gallery' => [
            '../assets/products/Lentils.webp',
            '../assets/products/Lentils.webp'
        ],
        'attributes' => [
            'Color' => 'Various',
            'Protein' => '25%',
            'Shelf Life' => '24 months',
            'Storage' => 'Dry place',
            'Certification' => 'Food Grade',
            'Moisture' => '< 14%',
            'Foreign Material' => '< 0.5%',
            'Test Weight' => '> 78 kg/hl'
        ],
        'benefits' => [
            'High protein content',
            'Rich in dietary fiber',
            'Supports heart health',
            'Low glycemic index'
        ],
        'specifications' => [
            'Botanical Name' => 'Lens culinaris',
            'Family' => 'Fabaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Cleaned and sorted',
            'Particle Size' => 'Whole seeds',
            '1000 Kernel Weight' => '> 50g'
        ]
    ],
    [
        'id' => 24,
        'name' => 'Narcissus',
        'scientific_name' => 'Narcissus tazetta',
        'category' => 'Herbs',
        'origin' => 'Mediterranean',
        'description' => 'Beautiful aromatic flowers with delicate fragrance.',
        'full_description' => 'Narcissus tazetta, commonly known as the bunch-flowered narcissus, is a perennial flowering plant prized for its exquisite fragrance and delicate white flowers. This Mediterranean native has been cultivated for centuries for both ornamental and medicinal purposes. The essential oils extracted from narcissus flowers are highly valued in the perfume industry for their unique sweet, floral scent. In traditional medicine, narcissus has been used to treat various ailments including respiratory conditions and skin disorders.',
        'uses' => ['Perfumery', 'Medicine', 'Decorative'],
        'season' => 'Spring',
        'availability' => 'Seasonal',
        'price_per_kg' => '$45',
        'min_order' => '5 kg',
        'img' => '../assets/products/Narcissus.webp',
        'gallery' => [
            '../assets/products/Narcissus.webp',
            '../assets/products/Narcissus.webp'
        ],
        'attributes' => [
            'Color' => 'White/Yellow',
            'Fragrance' => 'Strong, Sweet',
            'Shelf Life' => '12 months',
            'Storage' => 'Cool, dry place',
            'Certification' => 'Organic',
            'Harvest Method' => 'Hand-picked',
            'Moisture Content' => '< 12%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Natural fragrance source',
            'Anti-inflammatory properties',
            'Skin soothing benefits',
            'Relaxing aromatherapy'
        ],
        'specifications' => [
            'Botanical Name' => 'Narcissus tazetta',
            'Family' => 'Amaryllidaceae',
            'Plant Part Used' => 'Flowers',
            'Processing Method' => 'Air-dried',
            'Particle Size' => 'Whole flowers',
            'Foreign Matter' => '< 2%'
        ]
    ],
    [
        'id' => 25,
        'name' => 'Nigella sativa',
        'scientific_name' => 'Nigella sativa',
        'category' => 'Spices',
        'origin' => 'Egypt',
        'description' => 'Black seeds with numerous health benefits and peppery flavor.',
        'full_description' => 'Nigella sativa, commonly known as black seed or black cumin, is an annual flowering plant native to South and Southwest Asia. Our premium Egyptian black seeds are carefully cultivated and processed to preserve their distinctive flavor and numerous health benefits. The small, black seeds have a complex flavor profile that combines peppery, slightly bitter, and onion-like notes. Black seed has been used for thousands of years in traditional medicine systems, earning it the reputation of "the cure for everything except death" in some cultures.',
        'uses' => ['Medicine', 'Cooking', 'Oil Production'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$35',
        'min_order' => '5 kg',
        'img' => '../assets/products/Nigella_sativa.webp',
        'gallery' => [
            '../assets/products/Nigella_sativa.webp',
            '../assets/products/Nigella_sativa.webp'
        ],
        'attributes' => [
            'Color' => 'Black',
            'Flavor' => 'Peppery, Slightly Bitter',
            'Shelf Life' => '24 months',
            'Storage' => 'Airtight container',
            'Certification' => 'Organic',
            'Thymoquinone Content' => '0.5-1.5%',
            'Moisture' => '< 10%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Powerful antioxidant',
            'Supports immune function',
            'Anti-inflammatory properties',
            'Promotes respiratory health'
        ],
        'specifications' => [
            'Botanical Name' => 'Nigella sativa',
            'Family' => 'Ranunculaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Sun-dried',
            'Particle Size' => 'Whole seeds',
            'Foreign Matter' => '< 1%'
        ]
    ],
    [
        'id' => 26,
        'name' => 'Paprika',
        'scientific_name' => 'Capsicum annuum',
        'category' => 'Spices',
        'origin' => 'Hungary',
        'description' => 'Vibrant red spice with sweet to hot flavor variations.',
        'full_description' => 'Paprika is a ground spice made from dried red peppers, and our Hungarian paprika is considered among the finest in the world. The peppers are carefully selected, dried, and ground using traditional methods to preserve their vibrant color and distinctive flavor. Hungarian paprika comes in several varieties ranging from sweet and mild to hot and spicy, each with its own unique flavor profile and culinary applications. The rich red color comes from high levels of carotenoids, which also provide antioxidant benefits.',
        'uses' => ['Cooking', 'Food Industry', 'Coloring'],
        'season' => 'Autumn',
        'availability' => 'In Stock',
        'price_per_kg' => '$14',
        'min_order' => '10 kg',
        'img' => '../assets/products/Paprika.webp',
        'gallery' => [
            '../assets/products/Paprika.webp',
            '../assets/products/Paprika.webp'
        ],
        'attributes' => [
            'Color' => 'Red',
            'Flavor' => 'Sweet to Hot',
            'Shelf Life' => '24 months',
            'Storage' => 'Cool, dark place',
            'Certification' => 'Food Grade',
            'Carotenoid Content' => '100-1000 mg/kg',
            'Moisture' => '< 12%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Rich in antioxidants',
            'Supports eye health',
            'Anti-inflammatory properties',
            'Boosts metabolism'
        ],
        'specifications' => [
            'Botanical Name' => 'Capsicum annuum',
            'Family' => 'Solanaceae',
            'Plant Part Used' => 'Dried peppers',
            'Processing Method' => 'Ground',
            'Particle Size' => 'Fine powder',
            'Capsaicin Content' => '0-30 mg/kg'
        ]
    ],
    [
        'id' => 27,
        'name' => 'Peas',
        'scientific_name' => 'Pisum sativum',
        'category' => 'Legumes',
        'origin' => 'Syria',
        'description' => 'Sweet, nutritious legumes perfect for various culinary applications.',
        'full_description' => 'Peas are one of the oldest cultivated crops, with evidence of their cultivation dating back to the Neolithic era. Our Syrian peas are grown in the ideal climate conditions where traditional farming methods produce peas with exceptional sweetness and nutritional value. These small, round legumes have a naturally sweet flavor and tender texture that makes them popular in countless dishes worldwide. Peas are an excellent source of plant-based protein, dietary fiber, and essential vitamins and minerals.',
        'uses' => ['Food', 'Animal Feed', 'Industry'],
        'season' => 'Spring',
        'availability' => 'Seasonal',
        'price_per_kg' => '$3',
        'min_order' => '20 kg',
        'img' => '../assets/products/Peas.webp',
        'gallery' => [
            '../assets/products/Peas.webp',
            '../assets/products/Peas.webp'
        ],
        'attributes' => [
            'Color' => 'Green',
            'Protein' => '20%',
            'Shelf Life' => '12 months',
            'Storage' => 'Cool, dry place',
            'Certification' => 'Food Grade',
            'Moisture' => '< 14%',
            'Foreign Material' => '< 1%',
            'Test Weight' => '> 75 kg/hl'
        ],
        'benefits' => [
            'High protein content',
            'Rich in dietary fiber',
            'Good source of vitamins',
            'Supports heart health'
        ],
        'specifications' => [
            'Botanical Name' => 'Pisum sativum',
            'Family' => 'Fabaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Cleaned and sorted',
            'Particle Size' => 'Whole seeds',
            '1000 Kernel Weight' => '> 150g'
        ]
    ],
    [
        'id' => 28,
        'name' => 'Rosemary',
        'scientific_name' => 'Rosmarinus officinalis',
        'category' => 'Herbs',
        'origin' => 'Mediterranean',
        'description' => 'Aromatic herb with pine-like fragrance, essential for cooking and medicine.',
        'full_description' => 'Rosemary is a woody, perennial herb with fragrant, evergreen leaves that has been cherished since ancient times for its culinary, medicinal, and aromatic properties. Our Mediterranean rosemary is grown in the ideal climate conditions that produce leaves with exceptional essential oil content and fragrance. The needle-like leaves have a distinctive pine-like aroma with hints of camphor, lemon, and mint. Rosemary has been used traditionally to improve memory, boost circulation, and support digestive health.',
        'uses' => ['Cooking', 'Medicine', 'Aromatherapy'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$22',
        'min_order' => '3 kg',
        'img' => '../assets/products/Rosemary.webp',
        'gallery' => [
            '../assets/products/Rosemary.webp',
            '../assets/products/Rosemary.webp'
        ],
        'attributes' => [
            'Color' => 'Green',
            'Flavor' => 'Pine-like, Peppery',
            'Shelf Life' => '12 months',
            'Storage' => 'Airtight container',
            'Certification' => 'Organic',
            'Essential Oil Content' => '1-2%',
            'Moisture' => '< 12%',
            'Leaf Integrity' => '> 90%'
        ],
        'benefits' => [
            'Enhances memory and concentration',
            'Powerful antioxidant',
            'Anti-inflammatory properties',
            'Supports digestive health'
        ],
        'specifications' => [
            'Botanical Name' => 'Rosmarinus officinalis',
            'Family' => 'Lamiaceae',
            'Plant Part Used' => 'Leaves',
            'Processing Method' => 'Air-dried',
            'Particle Size' => 'Whole leaves or crushed',
            'Stem Content' => '< 10%'
        ]
    ],
    [
        'id' => 29,
        'name' => 'Sesame',
        'scientific_name' => 'Sesamum indicum',
        'category' => 'Seeds',
        'origin' => 'Sudan',
        'description' => 'Nutritious seeds rich in oil, essential for cooking and oil production.',
        'full_description' => 'Sesame seeds are one of the oldest oilseed crops known to humanity, with cultivation dating back over 3,000 years. Our premium Sudanese sesame seeds are grown in the ideal climate conditions that produce seeds with high oil content and exceptional nutritional value. The small, flat seeds come in various colors including white, black, and brown, each with its own unique flavor profile and culinary applications. Sesame seeds are rich in healthy fats, protein, and essential minerals, making them a valuable addition to both food and oil production.',
        'uses' => ['Food', 'Oil Production', 'Baking'],
        'season' => 'Autumn',
        'availability' => 'In Stock',
        'price_per_kg' => '$8',
        'min_order' => '20 kg',
        'img' => '../assets/products/Sesame.webp',
        'gallery' => [
            '../assets/products/Sesame.webp',
            '../assets/products/Sesame.webp'
        ],
        'attributes' => [
            'Color' => 'White/Black',
            'Oil Content' => '50%',
            'Shelf Life' => '18 months',
            'Storage' => 'Cool, dry place',
            'Certification' => 'Food Grade',
            'Protein Content' => '20-25%',
            'Moisture' => '< 6%',
            'Purity' => '99%'
        ],
        'benefits' => [
            'Rich in healthy fats',
            'High protein content',
            'Supports heart health',
            'Good source of calcium'
        ],
        'specifications' => [
            'Botanical Name' => 'Sesamum indicum',
            'Family' => 'Pedaliaceae',
            'Plant Part Used' => 'Seeds',
            'Processing Method' => 'Cleaned and sorted',
            'Particle Size' => 'Whole seeds',
            '1000 Kernel Weight' => '> 3g'
        ]
    ],
    [
        'id' => 30,
        'name' => 'Thyme',
        'scientific_name' => 'Thymus vulgaris',
        'category' => 'Herbs',
        'origin' => 'Mediterranean',
        'description' => 'Aromatic herb with earthy flavor, widely used in Mediterranean cuisine.',
        'full_description' => 'Thyme is a versatile herb that has been cherished for centuries for its culinary, medicinal, and aromatic properties. Our Mediterranean thyme is grown in the ideal climate conditions that produce leaves with exceptional essential oil content and flavor. The small, gray-green leaves have a distinctive earthy flavor with minty and citrus notes that complements a wide variety of dishes. Thyme has been used traditionally to treat respiratory conditions, digestive issues, and as a natural antiseptic.',
        'uses' => ['Cooking', 'Medicine', 'Aromatherapy'],
        'season' => 'Summer',
        'availability' => 'In Stock',
        'price_per_kg' => '$20',
        'min_order' => '5 kg',
        'img' => '../assets/products/Thyme.webp',
        'gallery' => [
            '../assets/products/Thyme.webp',
            '../assets/products/Thyme.webp'
        ],
        'attributes' => [
            'Color' => 'Green',
            'Flavor' => 'Earthy, Minty',
            'Shelf Life' => '12 months',
            'Storage' => 'Airtight container',
            'Certification' => 'Organic',
            'Thymol Content' => '20-60%',
            'Moisture' => '< 12%',
            'Leaf Integrity' => '> 85%'
        ],
        'benefits' => [
            'Supports respiratory health',
            'Natural antiseptic',
            'Rich in antioxidants',
            'Aids digestion'
        ],
        'specifications' => [
            'Botanical Name' => 'Thymus vulgaris',
            'Family' => 'Lamiaceae',
            'Plant Part Used' => 'Leaves',
            'Processing Method' => 'Air-dried',
            'Particle Size' => 'Whole leaves or crushed',
            'Stem Content' => '< 15%'
        ]
    ],
    [
        'id' => 31,
        'name' => 'Turmeric',
        'scientific_name' => 'Curcuma longa',
        'category' => 'Spices',
        'origin' => 'India',
        'description' => 'Golden spice with earthy flavor and powerful anti-inflammatory properties.',
        'full_description' => 'Turmeric is a golden-yellow spice that has been used for thousands of years in both cooking and traditional medicine. Our premium Indian turmeric is grown in the ideal climate conditions that produce rhizomes with high curcumin content and vibrant color. The rhizomes are carefully harvested, processed, and ground to preserve their distinctive earthy flavor and numerous health benefits. Turmeric\'s active compound, curcumin, is responsible for its powerful anti-inflammatory and antioxidant properties.',
        'uses' => ['Cooking', 'Medicine', 'Coloring'],
        'season' => 'Year-round',
        'availability' => 'In Stock',
        'price_per_kg' => '$16',
        'min_order' => '10 kg',
        'img' => '../assets/products/Turmeric.webp',
        'gallery' => [
            '../assets/products/Turmeric.webp',
            '../assets/products/Turmeric.webp'
        ],
        'attributes' => [
            'Color' => 'Golden Yellow',
            'Flavor' => 'Earthy, Slightly Bitter',
            'Shelf Life' => '24 months',
            'Storage' => 'Cool, dry place',
            'Certification' => 'Organic',
            'Curcumin Content' => '2-5%',
            'Moisture' => '< 12%',
            'Purity' => '98%'
        ],
        'benefits' => [
            'Powerful anti-inflammatory',
            'Rich in antioxidants',
            'Supports joint health',
            'Enhances brain function'
        ],
        'specifications' => [
            'Botanical Name' => 'Curcuma longa',
            'Family' => 'Zingiberaceae',
            'Plant Part Used' => 'Rhizomes',
            'Processing Method' => 'Ground',
            'Particle Size' => 'Fine powder',
            'Foreign Matter' => '< 1%'
        ]
    ]
];

// Get product ID from URL
$product_id = $_GET['id'] ?? null;
$product = null;

if ($product_id) {
    foreach ($products as $p) {
        if ($p['id'] == $product_id) {
            $product = $p;
            break;
        }
    }
}

// If product not found, redirect to products page
if (!$product) {
    header('Location: products.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['name']) ?> - Product Details | Karam Spices Importer</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/ltr.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .product-detail-header {
            background: linear-gradient(135deg, var(--green-dark), var(--green-main));
            color: white;
            padding: 40px 0;
        }
        .breadcrumb {
            background: var(--gray-light);
            padding: 15px 0;
            border-bottom: 1px solid var(--gray-mid);
        }
        .breadcrumb a {
            color: var(--text-mid);
            text-decoration: none;
        }
        .breadcrumb a:hover {
            color: var(--green-main);
        }
        .breadcrumb span {
            margin: 0 10px;
            color: var(--text-light);
        }
        .product-detail-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }
        .product-gallery {
            position: sticky;
            top: 20px;
            height: fit-content;
        }
        .main-image {
            width: 100%;
            height: 400px;
            border-radius: var(--radius-lg);
            overflow: hidden;
            margin-bottom: 20px;
        }
        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .gallery-thumbnails {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
            gap: 10px;
        }
        .thumbnail {
            width: 80px;
            height: 80px;
            border-radius: var(--radius);
            overflow: hidden;
            cursor: pointer;
            opacity: 0.6;
            transition: var(--transition);
            border: 2px solid transparent;
        }
        .thumbnail:hover, .thumbnail.active {
            opacity: 1;
            border-color: var(--green-main);
        }
        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .product-info {
            height: fit-content;
        }
        .product-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--text-dark);
        }
        .product-scientific {
            font-size: 1.2rem;
            color: var(--text-light);
            font-style: italic;
            margin-bottom: 20px;
        }
        .product-meta {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text-mid);
        }
        .meta-item i {
            color: var(--green-main);
        }
        .product-description {
            margin-bottom: 40px;
        }
        .product-description h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--text-dark);
        }
        .product-description p {
            line-height: 1.8;
            color: var(--text-mid);
        }
        .product-attributes {
            background: var(--gray-light);
            padding: 30px;
            border-radius: var(--radius-lg);
            margin-bottom: 40px;
        }
        .product-attributes h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--text-dark);
        }
        .attributes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        .attribute-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--gray-mid);
        }
        .attribute-item:last-child {
            border-bottom: none;
        }
        .attribute-name {
            font-weight: 500;
            color: var(--text-dark);
        }
        .attribute-value {
            color: var(--text-mid);
        }
        .product-benefits {
            margin-bottom: 40px;
        }
        .product-benefits h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--text-dark);
        }
        .benefits-list {
            list-style: none;
        }
        .benefits-list li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
            color: var(--text-mid);
        }
        .benefits-list li:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--green-main);
        }
        .product-specifications {
            background: var(--gray-light);
            padding: 30px;
            border-radius: var(--radius-lg);
            margin-bottom: 40px;
        }
        .product-specifications h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--text-dark);
        }
        .specs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        .spec-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--gray-mid);
        }
        .spec-item:last-child {
            border-bottom: none;
        }
        .spec-name {
            font-weight: 500;
            color: var(--text-dark);
        }
        .spec-value {
            color: var(--text-mid);
        }
        .product-actions {
            display: flex;
            gap: 20px;
            align-items: center;
            padding: 30px;
            background: var(--green-pale);
            border-radius: var(--radius-lg);
        }
        .price-info {
            flex: 1;
        }
        .price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--green-main);
        }
        .min-order {
            color: var(--text-mid);
            margin-top: 5px;
        }
        .action-buttons {
            display: flex;
            gap: 15px;
        }
        .btn-primary {
            background: var(--green-main);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: var(--radius);
            font-size: 1.1rem;
            cursor: pointer;
            transition: var(--transition);
        }
        .btn-primary:hover {
            background: var(--green-dark);
        }
        .btn-outline {
            background: transparent;
            color: var(--green-main);
            padding: 15px 30px;
            border: 2px solid var(--green-main);
            border-radius: var(--radius);
            font-size: 1.1rem;
            cursor: pointer;
            transition: var(--transition);
        }
        .btn-outline:hover {
            background: var(--green-main);
            color: white;
        }
        .related-products {
            margin: 80px 0;
        }
        .related-products h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            text-align: center;
            color: var(--text-dark);
        }
        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }
        .related-card {
            background: white;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            cursor: pointer;
        }
        .related-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        .related-img {
            height: 150px;
            overflow: hidden;
        }
        .related-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .related-info {
            padding: 20px;
        }
        .related-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text-dark);
        }
        .related-category {
            color: var(--text-light);
            font-size: 0.9rem;
        }
        @media (max-width: 968px) {
            .product-detail-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .product-gallery {
                position: static;
            }
            .main-image {
                height: 300px;
            }
        }
        @media (max-width: 768px) {
            .product-title {
                font-size: 2rem;
            }
            .product-actions {
                flex-direction: column;
                align-items: stretch;
            }
            .action-buttons {
                flex-direction: column;
            }
            .related-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body class="ltr">

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
                    <a href="index.php">Home</a>
                    <a href="#">Imports</a>
                    <a href="#">Exports</a>
                    <a href="products.php" >Store</a>
                </nav>
                <div class="header-actions">
                    <a href="<?= $alt_lang_url ?>" class="lang-switch">
                        <i class="fas fa-globe"></i> العربية
                    </a>
                    <!-- <a href="#" class="btn-login">Login</a> -->
                    <a href="#contact" class="btn-cta">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ========== BREADCRUMB ========== -->
<section class="breadcrumb">
    <div class="container">
        <a href="index.php">Home</a>
        <span>></span>
        <a href="products.php">Products</a>
        <span>></span>
        <span><?= htmlspecialchars($product['name']) ?></span>
    </div>
</section>

<!-- ========== PRODUCT DETAIL ========== -->
<section class="product-detail">
    <div class="product-detail-container">
        <div class="product-gallery">
            <div class="main-image">
                <img id="mainImage" src="<?= $product['img'] ?>" alt="<?= htmlspecialchars($product['name']) ?>">
            </div>
            <div class="gallery-thumbnails">
                <?php foreach ($product['gallery'] as $index => $image): ?>
                    <div class="thumbnail <?= $index === 0 ? 'active' : '' ?>" onclick="changeImage('<?= $image ?>', this)">
                        <img src="<?= $image ?>" alt="<?= htmlspecialchars($product['name']) ?> <?= $index + 1 ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="product-info">
            <h1 class="product-title"><?= htmlspecialchars($product['name']) ?></h1>
            <p class="product-scientific"><?= htmlspecialchars($product['scientific_name']) ?></p>
            
            <div class="product-meta">
                <div class="meta-item">
                    <i class="fas fa-tag"></i>
                    <span><?= htmlspecialchars($product['category']) ?></span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span><?= htmlspecialchars($product['origin']) ?></span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span><?= htmlspecialchars($product['season']) ?></span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-check-circle"></i>
                    <span><?= htmlspecialchars($product['availability']) ?></span>
                </div>
            </div>

            <div class="product-description">
                <h3>Description</h3>
                <p><?= htmlspecialchars($product['full_description']) ?></p>
            </div>

            <div class="product-attributes">
                <h3>Product Attributes</h3>
                <div class="attributes-grid">
                    <?php foreach ($product['attributes'] as $name => $value): ?>
                        <div class="attribute-item">
                            <span class="attribute-name"><?= htmlspecialchars($name) ?>:</span>
                            <span class="attribute-value"><?= htmlspecialchars($value) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="product-benefits">
                <h3>Health Benefits & Uses</h3>
                <ul class="benefits-list">
                    <?php foreach ($product['benefits'] as $benefit): ?>
                        <li><?= htmlspecialchars($benefit) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="product-specifications">
                <h3>Technical Specifications</h3>
                <div class="specs-grid">
                    <?php foreach ($product['specifications'] as $name => $value): ?>
                        <div class="spec-item">
                            <span class="spec-name"><?= htmlspecialchars($name) ?>:</span>
                            <span class="spec-value"><?= htmlspecialchars($value) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="product-actions">
                <div class="price-info">
                    <div class="price"><?= htmlspecialchars($product['price_per_kg']) ?>/kg</div>
                    <div class="min-order">Minimum Order: <?= htmlspecialchars($product['min_order']) ?></div>
                </div>
                <div class="action-buttons">
                    <button class="btn-primary" onclick="orderProduct()">Order Now</button>
                    <button class="btn-outline" onclick="requestSample()">Request Sample</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== RELATED PRODUCTS ========== -->
<section class="related-products">
    <div class="container">
        <h2>Related Products</h2>
        <div class="related-grid">
            <?php
            $related_products = array_filter($products, function($p) use ($product) {
                return $p['id'] != $product['id'] && $p['category'] === $product['category'];
            });
            $related_products = array_slice($related_products, 0, 4);
            ?>
            <?php foreach ($related_products as $related): ?>
                <div class="related-card" onclick="window.location.href='product-details.php?id=<?= $related['id'] ?>'">
                    <div class="related-img">
                        <img src="<?= $related['img'] ?>" alt="<?= htmlspecialchars($related['name']) ?>">
                    </div>
                    <div class="related-info">
                        <h4 class="related-name"><?= htmlspecialchars($related['name']) ?></h4>
                        <p class="related-category"><?= htmlspecialchars($related['category']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
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
            English (US) &nbsp;|&nbsp;
            <a href="<?= $alt_lang_url ?>">العربية</a> &nbsp;|&nbsp;
            Copyright © Karam
        </span>
    </div>
</footer>

<script>
function changeImage(imageSrc, thumbnail) {
    document.getElementById('mainImage').src = imageSrc;
    document.querySelectorAll('.thumbnail').forEach(thumb => thumb.classList.remove('active'));
    thumbnail.classList.add('active');
}

function orderProduct() {
    // In a real application, this would open an order form or cart
    alert('Order functionality would be implemented here. For now, please contact us directly to place an order.');
}

function requestSample() {
    // In a real application, this would open a sample request form
    alert('Sample request functionality would be implemented here. For now, please contact us directly to request a sample.');
}
</script>

<script src="../js/main.js"></script>
</body>
</html>
