<?php

if(basename($_SERVER['PHP_SELF']) == "index-ar.php")
{
    $schedule = [
  "afternoon" => [
    "title" => "بعد الظهر",
    "i18n"  => "afternoon",
    "items" => [
      [
        "title" => "ماقبل الفعالية/التواصل",
        "i18n"  => "title1",
        "time"  => "12:00 PM - 1:30 PM",
        "content" => "ماقبل الفعالية والتواصل بين الحضور.",
        "highlights" => []
      ],
      [
        "title" => "التسجيل",
        "i18n"  => "title2",
        "time"  => "1:30 PM - 2:00 PM",
        "content" => "تسجيل الحضور.",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الترحيبية — جمعية المبرمجين",
        "i18n"  => "title3",
        "time"  => "2:00 PM - 2:05 PM",
        "image" => "img/1605473293613.jpeg",
        "content" => "<strong>اسم المتحدث:</strong> م. عبدالعزيز العريج<br><strong>المنصب:</strong> رئيس<br><strong>الجهة:</strong> جمعية المبرمجين (parmg)<br><strong>عنوان الكلمة:</strong> كلمة ترحيبية",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الحكومية (1) — هيئة الحكومة الرقمية (DGA)",
        "i18n"  => "title4",
        "time"  => "2:05 PM - 2:10 PM",
        "content" => "كلمة الهيئة الحكومية الرقمية (DGA).",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الحكومية (2) — الهيئة السعودية للبيانات والذكاء الاصطناعي (SDAIA)",
        "i18n"  => "title5",
        "time"  => "2:10 PM - 2:15 PM",
        "image" => "img/1659711277625.jpeg",
        "content" => "<strong>اسم المتحدث:</strong> د. عبدالرحمن حبيب<br><strong>المنصب:</strong> مدير المركز الدولي لأبحاث وأخلاقيات الذكاء الاصطناعي (ICAIRE) تحت إشراف منظمة اليونسكو<br><strong>الجهة:</strong> SDAIA<br><strong>عنوان الكلمة:</strong> نظرة عامة على المركز الدولي لأبحاث وأخلاقيات الذكاء الاصطناعي (ICAIRE)",
        "highlights" => []
      ],
      [
        "title" => "ممثل السفارة الصينية",
        "i18n"  => "title6",
        "time"  => "2:15 PM - 2:20 PM",
        "content" => "كلمة من ممثل السفارة الصينية.",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الرئيسية — اتحاد الصين لتعزيز المصادر المفتوحة (COPU)",
        "i18n"  => "title7",
        "time"  => "2:30 PM - 2:45 PM",
        "image" => "/img/a.png",
        "content" => "<strong>اسم المتحدث:</strong> جيري تان<br><strong>المنصب:</strong> نائب الأمين العام<br><strong>الجهة:</strong> اتحاد الصين لتعزيز المصادر المفتوحة (COPU)<br><strong>عنوان الكلمة:</strong> المصادر المفتوحة كجسر: البناء المشترك للمستقبل الرقمي بين الصين والمملكة العربية السعودية",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الرئيسية لممثل الشركة — هواوي (openEuler)",
        "i18n"  => "title8",
        "time"  => "2:45 PM - 3:00 PM",
        "image" => "/img/b.png",
        "content" => "<strong>اسم المتحدث:</strong> هو شينوي<br><strong>المنصب:</strong> رئيس اللجنة الفنية لنظام التشغيل openEuler وكبير مهندسي الأنظمة في هواوي<br><strong>الجهة:</strong> هواوي<br><strong>عنوان الكلمة:</strong> openEuler",
        "highlights" => []
      ],
      [
        "title" => "استراحة القهوة وأداء الصلاة",
        "i18n"  => "title9",
        "time"  => "3:00 PM - 3:30 PM",
        "content" => "استراحة القهوة وأداء الصلاة.",
        "highlights" => []
      ],


      /* evening continues inside same tab - Option A */

      [
        "title" => "الكلمة الرئيسية — RUYA OS",
        "i18n"  => "title10",
        "time"  => "3:30 PM - 3:45 PM",
        "image" => "/img/c.png",
        "content" => "<strong>اسم المتحدث:</strong> مصعب<br><strong>المنصب:</strong> الرئيس التنفيذي<br><strong>الجهة:</strong> RUYA OS<br><strong>عنوان الكلمة:</strong> مقدمة عن نظام RUYA OS",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الرئيسية لممثل الشركة — ZTE",
        "i18n"  => "title11",
        "time"  => "3:45 PM - 4:00 PM",
        "image" => "/img/d.png",
        "content" => "<strong>اسم المتحدث:</strong> منغ وي<br><strong>المنصب:</strong> رئيس فريق المصادر المفتوحة والأمين العام لعدد من التحالفات التقنية الدولية<br><strong>الجهة:</strong> ZTE<br><strong>عنوان الكلمة:</strong> بناء نظام بيئي جديد للذكاء الاصطناعي يتميز بالانفتاح والشمولية وسهولة الوصول",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الرئيسية لممثل الشركة — YonYou",
        "i18n"  => "title12",
        "time"  => "4:00 PM - 4:15 PM",
        "image" => "/img/e.png",
        "content" => "<strong>اسم المتحدث:</strong> روبرت غوان<br><strong>المنصب:</strong> المدير العام للشرق الأوسط<br><strong>الجهة:</strong> YonYou<br><strong>عنوان الكلمة:</strong> تمكين المؤسسات السعودية بالذكاء الاصطناعي لتحقيق التحول الرقمي",
        "highlights" => []
      ],
      [
        "title" => "الجلسة الحوارية الأولى — النظام البيئي للذكاء الاصطناعي مفتوح المصدر",
        "i18n"  => "title13",
        "time"  => "4:15 PM - 5:00 PM",
        "content" => "جلسة حوارية<br><strong>الموضوع:</strong> النظام البيئي للذكاء الاصطناعي مفتوح المصدر<br><strong>المتحدثون:</strong> هواوي، ZTE، SDAIA، DGA، RUYA",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الرئيسية لممثل الشركة — AitoCoder",
        "i18n"  => "title14",
        "time"  => "5:00 PM - 5:15 PM",
        "image" => "/img/f.png",
        "content" => "<strong>اسم المتحدث:</strong> ماكسويل زو<br><strong>المنصب:</strong> مدير المنتجات<br><strong>الجهة:</strong> AitoCoder<br><strong>عنوان الكلمة:</strong> تمكين الجميع: البرمجة بالذكاء الاصطناعي مع AitoCoder",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الرئيسية لممثل الشركة — ORION",
        "i18n"  => "title15",
        "time"  => "5:15 PM - 5:30 PM",
        "image" => "/img/g.png",
        "content" => "<strong>اسم المتحدث:</strong> شاو جيانكيو<br><strong>المنصب:</strong> الرئيس التنفيذي ومؤسس مجتمع Orion<br><strong>الجهة:</strong> Orion AI Tech<br><strong>عنوان الكلمة:</strong> ربط الذكاء وتنظيم المستقبل — النموذج الجديد لذكاء الأعمال المؤسسي",
        "highlights" => []
      ],
      [
        "title" => "استراحة القهوة وأداء الصلاة",
        "i18n"  => "title16",
        "time"  => "5:30 PM - 6:00 PM",
        "content" => "استراحة القهوة وأداء الصلاة.",
        "highlights" => []
      ],
      [
        "title" => "مراسم توقيع الاتفاقيات (MOU)",
        "i18n"  => "title17",
        "time"  => "6:00 PM - 6:30 PM",
        "content" => "مراسم توقيع اتفاقيات التعاون ومذكرات التفاهم.",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الرئيسية لممثل الشركة — Huawei",
        "i18n"  => "title18",
        "time"  => "6:30 PM - 6:45 PM",
        "content" => "<strong>اسم المتحدث:</strong> متحدث هواوي<br><strong>المنصب:</strong> ممثل الشركة<br><strong>الجهة:</strong> Huawei<br><strong>عنوان الكلمة:</strong> جلسة هواوي المسائية",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الرئيسية لممثل الشركة — KPro",
        "i18n"  => "title19",
        "time"  => "6:45 PM - 7:00 PM",
        "image" => "/img/h.png",
        "content" => "<strong>اسم المتحدث:</strong> جورج تشين<br><strong>المنصب:</strong> Principal Evangelist<br><strong>الجهة:</strong> KPro<br><strong>عنوان الكلمة:</strong> الذكاء الاصطناعي الأصلي بالمعرفة مفتوحة المصدر",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الرئيسية لممثل الشركة — China Mobile",
        "i18n"  => "title20",
        "time"  => "7:00 PM - 7:15 PM",
        "image" => "/images/speakers/china-mobile.jpg",
        "content" => "<strong>اسم المتحدث:</strong> ممثل China Mobile<br><strong>المنصب:</strong> ممثل الشركة<br><strong>الجهة:</strong> China Mobile<br><strong>عنوان الكلمة:</strong> كلمة China Mobile",
        "highlights" => []
      ],
      [
        "title" => "الجلسة الحوارية الثانية — كيف يغير الذكاء الاصطناعي بيئة الأعمال",
        "i18n"  => "title21",
        "time"  => "7:15 PM - 8:00 PM",
        "content" => "جلسة حوارية<br><strong>الموضوع:</strong> كيف يغير الذكاء الاصطناعي بيئة الأعمال المؤسسية<br><strong>المتحدثون:</strong> Inspur، YonYou، SocialTech وآخرون",
        "highlights" => []
      ],
      [
        "title" => "الكلمة الختامية",
        "i18n"  => "title22",
        "time"  => "8:00 PM - 8:05 PM",
        "content" => "الكلمة الختامية ونهاية البرنامج.",
        "highlights" => []
      ],
      [
        "title" => "ورش العمل",
        "i18n"  => "title23",
        "time"  => "5:00 PM - 8:00 PM",
        "content" => "إقامة ورش العمل خلال هذه الفترة.",
        "highlights" => []
      ],
      [
        "title" => "عرض الشركات الناشئة",
        "i18n"  => "title24",
        "time"  => "5:00 PM - 8:00 PM",
        "content" => "عرض الشركات الناشئة خلال هذه الفترة.",
        "highlights" => []
      ]
    ]
  ]
];

}
else
{
    $schedule = [
    "afternoon" => [
      "title" => "Afternoon",
      "i18n"  => "afternoon",
      "items" => [
        [
          "title" => "Pre-Event & Networking",
          "i18n"  => "title1",
          "time"  => "12:00 PM - 1:30 PM",
          "content" => "Pre-event networking session.",
          "highlights" => []
        ],
        [
          "title" => "Registration",
          "i18n"  => "title2",
          "time"  => "1:30 PM - 2:00 PM",
          "content" => "Registration of attendees.",
          "highlights" => []
        ],
        [
          "title" => "Welcome Note: parmg",
          "i18n"  => "title3",
          "time"  => "2:00 PM - 2:05 PM",
          "image" => "img/1605473293613.jpeg",
          "content" => "<strong>Speaker Name:</strong> Eng. AbdulAziz AlOraij<br><strong>Portfolio/Bio:</strong> Chairman<br><strong>Organization:</strong> Programmers Association (parmg)<br><strong>Speech Title:</strong> Welcome Note",
          "highlights" => []
        ],
        [
          "title" => "Gov. Keynote #1 — DGA",
          "i18n"  => "title4",
          "time"  => "2:05 PM - 2:10 PM",
          "content" => "Government keynote by Digital Government Authority (DGA).",
          "highlights" => []
        ],
        [
          "title" => "Gov. Keynote #2 — SDAIA",
          "i18n"  => "title5",
          "time"  => "2:10 PM - 2:15 PM",
          "image" => "img/1659711277625.jpeg",
          "content" => "<strong>Speaker Name:</strong> Dr. Abdulrahman Habib<br><strong>Portfolio/Bio:</strong> Director, International Center for AI Research and Ethics (ICAIRE)<br><strong>Organization:</strong> SDAIA<br><strong>Speech Title:</strong> Overview of ICAIRE",
          "highlights" => []
        ],
        [
          "title" => "Representative — China Embassy",
          "i18n"  => "title6",
          "time"  => "2:15 PM - 2:20 PM",
          "content" => "Remarks by the representative from the Embassy of China.",
          "highlights" => []
        ],
        [
          "title" => "Keynote — COPU (Jerry Tan)",
          "i18n"  => "title7",
          "time"  => "2:30 PM - 2:45 PM",
          "image" => "/img/a.png",
          "content" => "<strong>Speaker Name:</strong> Jerry Tan<br><strong>Portfolio/Bio:</strong> Deputy Secretary-General<br><strong>Organization:</strong> China Open Source Promotion Union (COPU)<br><strong>Speech Title:</strong> Open Source as a Bridge: Co-Building the Digital Future for China and Saudi Arabia",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — Huawei (openEuler)",
          "i18n"  => "title8",
          "time"  => "2:45 PM - 3:00 PM",
          "image" => "/img/b.png",
          "content" => "<strong>Speaker Name:</strong> Hu Xinwei<br><strong>Portfolio/Bio:</strong> Chief Operating System Architect<br><strong>Organization:</strong> Huawei<br><strong>Speech Title:</strong> openEuler",
          "highlights" => []
        ],
        [
          "title" => "Coffee Break & Prayer",
          "i18n"  => "title9",
          "time"  => "3:00 PM - 3:30 PM",
          "content" => "Break and prayer time.",
          "highlights" => []
        ],
        
        /* evening */
        
        [
          "title" => "Keynote — RUYA OS",
          "i18n"  => "title10",
          "time"  => "3:30 PM - 3:45 PM",
          "image" => "/img/c.png",
          "content" => "<strong>Speaker Name:</strong> Mossab<br><strong>Portfolio/Bio:</strong> CEO<br><strong>Organization:</strong> RUYA OS<br><strong>Speech Title:</strong> RUYA OS Introduction",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — ZTE",
          "i18n"  => "title11",
          "time"  => "3:45 PM - 4:00 PM",
          "image" => "/img/d.png",
          "content" => "<strong>Speaker Name:</strong> Meng Wei<br><strong>Portfolio/Bio:</strong> Head of Open Source Team at ZTE, Secretary-general of the Cooperative Open Intelligent Computing Industry Alliance, Chairperson of LF AI & Data (2023-2024), Vice chairperson of ITU FG-AINN</strong> ZTE<br><strong>Speech Title:</strong> Build a New AI Ecosystem",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — YonYou",
          "i18n"  => "title12",
          "time"  => "4:00 PM - 4:15 PM",
          "image" => "/img/e.png",
          "content" => "<strong>Speaker Name:</strong> Robert Guan<br><strong>Portfolio/Bio:</strong> General Manager, Middle East<br><strong>Organization:</strong> YonYou<br><strong>Speech Title:</strong> Enterprise AI empowers Saudi organizations to digital transformation",
          "highlights" => []
        ],
        [
          "title" => "Panel 1 — Open Source AI Ecosystem",
          "i18n"  => "title13",
          "time"  => "4:15 PM - 5:00 PM",
          "content" => "Panel Discussion<br><strong>Topic:</strong> Open Source AI Ecosystem<br><strong>Speakers:</strong> Huawei, ZTE, SDAIA, DGA, RUYA",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — AitoCoder",
          "i18n"  => "title14",
          "time"  => "5:00 PM - 5:15 PM",
          "image" => "/img/f.png",
          "content" => "<strong>Speaker Name:</strong> Maxwell Zhou<br><strong>Portfolio/Bio:</strong> Product Manager<br><strong>Organization:</strong> AitoCoder<br><strong>Speech Title:</strong> Empowering the Everyman: AI Coding with AitoCoder",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — ORION",
          "i18n"  => "title15",
          "time"  => "5:15 PM - 5:30 PM",
          "image" => "/img/g.png",
          "content" => "<strong>Speaker Name:</strong> Shao JianQiu<br><strong>Portfolio/Bio:</strong> CEO of ORION AI Tech and the founder of the ORION Community.<br><strong>Organization:</strong> ORION AI Tech<br><strong>Speech Title:</strong> Connecting Intelligence, Orchestrating the Future",
          "highlights" => []
        ],
        [
          "title" => "Coffee Break & Prayer",
          "i18n"  => "title16",
          "time"  => "5:30 PM - 6:00 PM",
          "content" => "Break and prayer time.",
          "highlights" => []
        ],
        [
          "title" => "Signing Ceremony (MOU)",
          "i18n"  => "title17",
          "time"  => "6:00 PM - 6:30 PM",
          "content" => "Signing ceremony of strategic agreements and MoUs.<br>Aziz， JiaoBiao Dai<br>SSF AI committe & Parmg<br><br>Aziz, SAAD, Jerry, Dean<br>SCAI Studio Setup<br><br>Aziz, Jerry, Inspur, EDB<br>COPU & Parmg<br>OS, DB, AI Infra, AI Coding, Training Working Group Signing.",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — Huawei",
          "i18n"  => "title18",
          "time"  => "6:30 PM - 6:45 PM",
          "content" => "<strong>Speaker Name:</strong> Huawei Speaker<br><strong>Portfolio/Bio:</strong> Vendor Keynote<br><strong>Organization:</strong> Huawei<br><strong>Speech Title:</strong> Huawei Evening Session",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — KPro",
          "i18n"  => "title19",
          "time"  => "6:45 PM - 7:00 PM",
          "image" => "/img/h.png",
          "content" => "<strong>Speaker Name:</strong> George Chen<br><strong>Portfolio/Bio:</strong> Principal Evangelist<br><strong>Organization:</strong> KPro<br><strong>Speech Title:</strong> AI Native with Knowledge",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — China Mobile",
          "i18n"  => "title20",
          "time"  => "7:00 PM - 7:15 PM",
          "content" => "<strong>Speaker Name:</strong> China Mobile Speaker<br><strong>Portfolio/Bio:</strong> Vendor Keynote<br><strong>Organization:</strong> China Mobile<br><strong>Speech Title:</strong> China Mobile Keynote",
          "highlights" => []
        ],
        [
          "title" => "Panel 2 — How AI Changes Enterprise",
          "i18n"  => "title21",
          "time"  => "7:15 PM - 8:00 PM",
          "content" => "Panel Discussion<br><strong>Topic:</strong> How AI Changes Enterprise<br><strong>Speakers:</strong> Inspur, YonYou, SocialTech, Others",
          "highlights" => []
        ],
        [
          "title" => "Closing Note",
          "i18n"  => "title22",
          "time"  => "8:00 PM - 8:05 PM",
          "content" => "Closing remarks and end of event.",
          "highlights" => []
        ],
        [
          "title" => "Workshop",
          "i18n"  => "title23",
          "time"  => "5:00 PM - 8:00 PM",
          "content" => "Workshops will be conducted during this time.",
          "highlights" => []
        ],
        [
          "title" => "Startup Roadshow",
          "i18n"  => "title24",
          "time"  => "5:00 PM - 8:00 PM",
          "content" => "Startup roadshow sessions will be held during this time.",
          "highlights" => []
        ]
      ]
    ]
  ];


}
?>
<section class="event-schedule text-center">
  <div class="container">
    <div class="tab_block_main">

  <div class="tab_content">
    <?php $i = 0; foreach ($schedule as $day): ?>
      <div class="tab_block <?= $i == 0 ? 'active' : '' ?>" id="li-<?= $i ?>">

        <?php foreach ($day['items'] as $item): ?>
          <div class="card-schedule">
            <div class="item-headr d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <h4 class="mb-0" data-i18n="<?= $item['i18n'] ?>"><?= $item['title'] ?></h4>
                <i class="fas fa-chevron-down toggle-icon ms-2"></i>
              </div>
              <span class="schedule-time" dir="ltr" style='direction:ltr !important'><?= $item['time'] ?></span>
            </div>

            <div class="schedule-content" style="display: none;">
              <?php 
              if(isset($item['image']))
              {
                 if($item['image'] != '')
                    echo "<img src='".$item['image']."' class='speaker'>";
              }
              ?>
              <p style='text-align:start;padding:0px 50px;'>
                
                <?= $item['content'] ?>
              </p>

              <?php if (!empty($item['highlights'])): ?>
                <strong data-i18n="highli">Highlights</strong>
                <?php foreach ($item['highlights'] as $hl): ?>
                  <div data-i18n="<?= $hl['i18n'] ?>"><?= $hl['text'] ?></div>
                <?php endforeach; ?>
              <?php endif; ?>

            </div>
          </div>
        <?php endforeach; ?>

      </div>
    <?php $i++; endforeach; ?>
  </div>
</div>
    

  </div> <!-- end container -->
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const headers = document.querySelectorAll(".item-headr");

    headers.forEach(header => {
      header.addEventListener("click", function () {
        const content = this.nextElementSibling;

        // غلق جميع العناصر الأخرى (اختياري)
        document.querySelectorAll(".schedule-content").forEach(el => {
          if (el !== content) el.style.display = "none";
        });

        // فتح / إغلاق العنصر الحالي
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    });

    // إغلاق جميع الشرحات في البداية
    document.querySelectorAll(".schedule-content").forEach(el => {
      el.style.display = "none";
    });
  });
</script>