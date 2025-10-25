<?php

if(basename($_SERVER['PHP_SELF']) == "index-ar.php")
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
          "image" => "/images/speakers/abdulaziz-aloraij.jpg",
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
          "image" => "/images/speakers/abdulrahman-habib.jpg",
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
          "image" => "/images/speakers/jerry-tan.jpg",
          "content" => "<strong>Speaker Name:</strong> Jerry Tan<br><strong>Portfolio/Bio:</strong> Deputy Secretary-General<br><strong>Organization:</strong> China Open Source Promotion Union (COPU)<br><strong>Speech Title:</strong> Open Source as a Bridge: Co-Building the Digital Future for China and Saudi Arabia",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — Huawei (openEuler)",
          "i18n"  => "title8",
          "time"  => "2:45 PM - 3:00 PM",
          "image" => "/images/speakers/hu-xinwei.jpg",
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
          "image" => "/images/speakers/mossab.jpg",
          "content" => "<strong>Speaker Name:</strong> Mossab<br><strong>Portfolio/Bio:</strong> CEO<br><strong>Organization:</strong> RUYA OS<br><strong>Speech Title:</strong> RUYA OS Introduction",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — ZTE",
          "i18n"  => "title11",
          "time"  => "3:45 PM - 4:00 PM",
          "image" => "/images/speakers/meng-wei.jpg",
          "content" => "<strong>Speaker Name:</strong> Meng Wei<br><strong>Portfolio/Bio:</strong> Head of Open Source Team at ZTE, Secretary-general of the Cooperative Open Intelligent Computing Industry Alliance, Chairperson of LF AI & Data (2023-2024), Vice chairperson of ITU FG-AINN</strong> ZTE<br><strong>Speech Title:</strong> Build a New AI Ecosystem",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — YonYou",
          "i18n"  => "title12",
          "time"  => "4:00 PM - 4:15 PM",
          "image" => "/images/speakers/robert-guan.jpg",
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
          "image" => "/images/speakers/maxwell-zhou.jpg",
          "content" => "<strong>Speaker Name:</strong> Maxwell Zhou<br><strong>Portfolio/Bio:</strong> Product Manager<br><strong>Organization:</strong> AitoCoder<br><strong>Speech Title:</strong> Empowering the Everyman: AI Coding with AitoCoder",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — ORION",
          "i18n"  => "title15",
          "time"  => "5:15 PM - 5:30 PM",
          "image" => "/images/speakers/shao-jianqiu.jpg",
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
          "image" => "/images/speakers/huawei.jpg",
          "content" => "<strong>Speaker Name:</strong> Huawei Speaker<br><strong>Portfolio/Bio:</strong> Vendor Keynote<br><strong>Organization:</strong> Huawei<br><strong>Speech Title:</strong> Huawei Evening Session",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — KPro",
          "i18n"  => "title19",
          "time"  => "6:45 PM - 7:00 PM",
          "image" => "/images/speakers/george-chen.jpg",
          "content" => "<strong>Speaker Name:</strong> George Chen<br><strong>Portfolio/Bio:</strong> Principal Evangelist<br><strong>Organization:</strong> KPro<br><strong>Speech Title:</strong> AI Native with Knowledge",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — China Mobile",
          "i18n"  => "title20",
          "time"  => "7:00 PM - 7:15 PM",
          "image" => "/images/speakers/china-mobile.jpg",
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
          "image" => "/images/speakers/abdulaziz-aloraij.jpg",
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
          "image" => "/images/speakers/abdulrahman-habib.jpg",
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
          "image" => "/images/speakers/jerry-tan.jpg",
          "content" => "<strong>Speaker Name:</strong> Jerry Tan<br><strong>Portfolio/Bio:</strong> Deputy Secretary-General<br><strong>Organization:</strong> China Open Source Promotion Union (COPU)<br><strong>Speech Title:</strong> Open Source as a Bridge: Co-Building the Digital Future for China and Saudi Arabia",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — Huawei (openEuler)",
          "i18n"  => "title8",
          "time"  => "2:45 PM - 3:00 PM",
          "image" => "/images/speakers/hu-xinwei.jpg",
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
          "image" => "/images/speakers/mossab.jpg",
          "content" => "<strong>Speaker Name:</strong> Mossab<br><strong>Portfolio/Bio:</strong> CEO<br><strong>Organization:</strong> RUYA OS<br><strong>Speech Title:</strong> RUYA OS Introduction",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — ZTE",
          "i18n"  => "title11",
          "time"  => "3:45 PM - 4:00 PM",
          "image" => "/images/speakers/meng-wei.jpg",
          "content" => "<strong>Speaker Name:</strong> Meng Wei<br><strong>Portfolio/Bio:</strong> Head of Open Source Team at ZTE, Secretary-general of the Cooperative Open Intelligent Computing Industry Alliance, Chairperson of LF AI & Data (2023-2024), Vice chairperson of ITU FG-AINN</strong> ZTE<br><strong>Speech Title:</strong> Build a New AI Ecosystem",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — YonYou",
          "i18n"  => "title12",
          "time"  => "4:00 PM - 4:15 PM",
          "image" => "/images/speakers/robert-guan.jpg",
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
          "image" => "/images/speakers/maxwell-zhou.jpg",
          "content" => "<strong>Speaker Name:</strong> Maxwell Zhou<br><strong>Portfolio/Bio:</strong> Product Manager<br><strong>Organization:</strong> AitoCoder<br><strong>Speech Title:</strong> Empowering the Everyman: AI Coding with AitoCoder",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — ORION",
          "i18n"  => "title15",
          "time"  => "5:15 PM - 5:30 PM",
          "image" => "/images/speakers/shao-jianqiu.jpg",
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
          "image" => "/images/speakers/huawei.jpg",
          "content" => "<strong>Speaker Name:</strong> Huawei Speaker<br><strong>Portfolio/Bio:</strong> Vendor Keynote<br><strong>Organization:</strong> Huawei<br><strong>Speech Title:</strong> Huawei Evening Session",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — KPro",
          "i18n"  => "title19",
          "time"  => "6:45 PM - 7:00 PM",
          "image" => "/images/speakers/george-chen.jpg",
          "content" => "<strong>Speaker Name:</strong> George Chen<br><strong>Portfolio/Bio:</strong> Principal Evangelist<br><strong>Organization:</strong> KPro<br><strong>Speech Title:</strong> AI Native with Knowledge",
          "highlights" => []
        ],
        [
          "title" => "Vendor Keynote — China Mobile",
          "i18n"  => "title20",
          "time"  => "7:00 PM - 7:15 PM",
          "image" => "/images/speakers/china-mobile.jpg",
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
              <p style='text-align:start;padding:0px 50px;'><?= $item['content'] ?></p>

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