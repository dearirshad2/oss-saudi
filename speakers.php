<?php
if (basename($_SERVER['PHP_SELF']) == "index-ar.php") {
    $speakers = [
        [
            "img" => "img/1553153578787.jpeg",
            "name" => "محمد العمودي",
            "title" => "نائب الرئيس Parmg",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "img/20179982.jpeg",
            "name" => "جيري تان",
            "title" => "نائب الأمين العام التنفيذي لـ COUP",
            "link" => "https://linkedin.com/in/tanzhongyi/en"
        ],
        [
            "img" => "img/1605473293613.jpeg",
            "name" => "المهندس عبدالعزيز العريج",
            "title" => "رئيس جمعية المبرمجين",
            "link" => "https://www.linkedin.com/in/oraij/"
        ],
        [
            "img" => "img/1543366973208.jpeg",
            "name" => "ديان زو",
            "title" => "OpenTEKr",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "img/1659711277625.jpeg",
            "name" => "الدكتور عبد الرحمن حبيب",
            "title" => "مدير المركز الدولي لبحوث الذكاء الاصطناعي والأخلاقيات (ICAIRE) تحت رعاية اليونسكو.",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/b.png",
            "name" => "هو شينوي",
            "title" => "كبير مهندسي أنظمة التشغيل في هواوي (openEuler)",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/d.png",
            "name" => "منغ وي",
            "title" => "رئيس فريق المصادر المفتوحة في ZTE",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/e.png",
            "name" => "روبرت غوان",
            "title" => "المدير العام للشرق الأوسط في YonYou",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/f.png",
            "name" => "ماكسويل زو",
            "title" => "مدير المنتجات في AitoCoder",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/g.png",
            "name" => "شاو جيانكيو",
            "title" => "الرئيس التنفيذي لشركة ORION AI Tech",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/h.png",
            "name" => "جورج تشين",
            "title" => "كبير المبشرين التقنيين في KPro",
            "link" => "javascript:void(0)"
        ]
    ];
} else {
    $speakers = [
        [
            "img" => "img/1553153578787.jpeg",
            "name" => "Mohammed Al-Amoudi",
            "title" => "Vice Chairman Parmg",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "img/20179982.jpeg",
            "name" => "Jerry Tan",
            "title" => "Executive Vice Secretary-General of COPU",
            "link" => "https://linkedin.com/in/tanzhongyi/en"
        ],
        [
            "img" => "img/1605473293613.jpeg",
            "name" => "Eng. AbdulAziz AlOraij",
            "title" => "Chairman of Programmers Association",
            "link" => "https://www.linkedin.com/in/oraij/"
        ],
        [
            "img" => "img/1543366973208.jpeg",
            "name" => "Dean Zhou",
            "title" => "OpenTEKr",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "img/1659711277625.jpeg",
            "name" => "Dr. Abdulrahman Habib",
            "title" => "Director, International Center for AI Research and Ethics (ICAIRE) under the auspices of UNESCO.",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/b.png",
            "name" => "Hu Xinwei",
            "title" => "Chief Operating System Architect, Huawei (openEuler)",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/d.png",
            "name" => "Meng Wei",
            "title" => "Head of Open Source Team, ZTE",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/e.png",
            "name" => "Robert Guan",
            "title" => "GM, Middle East, YonYou",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/f.png",
            "name" => "Maxwell Zhou",
            "title" => "Product Manager, AitoCoder",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/g.png",
            "name" => "Shao JianQiu",
            "title" => "CEO, ORION AI Tech",
            "link" => "javascript:void(0)"
        ],
        [
            "img" => "/img/h.png",
            "name" => "George Chen",
            "title" => "Principal Evangelist, KPro",
            "link" => "javascript:void(0)"
        ]
    ];
}
?>

<div class="etn-row etn-speaker-wrapper">
    <?php foreach ($speakers as $speaker): ?>
        <div class="etn-col-lg-4 etn-col-md-6">
            <div class="etn-speaker-item">
                <div class="etn-speaker-thumb">
                    <a href="<?php echo $speaker['link']; ?>" class="etn-img-link" aria-label="<?php echo $speaker['name']; ?>">
                        <img decoding="async" src="<?php echo $speaker['img']; ?>" alt="">
                    </a>
                    <div class="etn-speakers-social"></div>
                </div>
                <div class="etn-speaker-content">
                    <h3 class="etn-title etn-speaker-title">
                        <a href="<?php echo $speaker['link']; ?>"><?php echo $speaker['name']; ?></a>
                    </h3>
                    <p><?php echo $speaker['title']; ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
