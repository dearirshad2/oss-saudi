<?php

if(basename($_SERVER['PHP_SELF']) == "index-ar.php")
{
    $schedule = [
        "day1" => [
          "title" => "اليوم الأول ",
          "i18n"  => "day1",
          "items" => [
            [
              "title" => "الكلمات الافتتاحية والعروض التقديمية",
              "i18n"  => "title1",
              "time"  => "9:00 AM - 12:00 PM",
              "content" => "كلمات افتتاحية وعروض رئيسية من قادة الصناعة ومسؤولي الحكومة.",
              "highlights" => []
            ],
            [
              "title" => "فترة للتواصل",
              "i18n"  => "title2",
              "time"  => "12:00 PM - 1:30 PM",
              "content" => "فرصة للتواصل مع المتحدثين والمشاركين وقادة القطاع.",
              "highlights" => []
            ],
            [
              "title" => "جلسات تقنية وورش عمل متخصصة",
              "i18n"  => "title3",
              "time"  => "1:30 PM - 5:00 PM",
              "content" => "ورش عمل عملية وعروض تقنية حول تقنيات المصادر المفتوحة المختلفة.",
              "highlights" => []
            ],
            [
              "title" => "لقاءات ومساحات تواصل مسائية",
              "i18n"  => "title4",
              "time"  => "5:00 PM - 7:00 PM",
              "content" => "لقاء مسائي يتضمن يحتوي فرصًا إضافية لبناء العلاقات والتواصل.",
              "highlights" => []
            ]
          ]
        ],

        "day2" => [
          "title" => "اليوم الثاني ",
          "i18n"  => "day2",
          "items" => [
            [
              "title" => "وزارة الاتصالات وتقنية المعلومات",
              "i18n"  => "title5",
              "time"  => "9:00 AM - 10:30 AM",
              "content" => "وزارة الاتصالات وتقنية المعلومات في المملكة العربية السعودية",
              "highlights" => [
                ["text" => "الاستثمار الأجنبي في قطاع الاتصالات وتقنية المعلومات.", "i18n" => "hisub1"]
              ]
            ],
            [
              "title" => "وزارة الاستثمار",
              "i18n"  => "title6",
              "time"  => "10:45 AM - 12:15 PM",
              "content" => "وزارة الاستثمار في المملكة العربية السعودية",
              "highlights" => [
                ["text" => "تحديثات نظام الاستثمار الجديد.", "i18n" => "hisub2"]
              ]
            ],
            [
              "title" => "غداء للتواصل",
              "i18n"  => "title7",
              "time"  => "12:15 PM - 1:30 PM",
              "content" => "فرصة للتواصل مع المتحدثين والمشاركين وقادة القطاع أثناء تناول الغداء.",
              "highlights" => []
            ],
            [
              "title" => "منطقة القراج",
              "i18n"  => "title8",
              "time"  => "1:30 PM - 3:00 PM",
              "content" => "الابتكار وريادة الأعمال",
              "highlights" => [
                ["text" => "القراج هو حي الشركات الناشئة الجديد الذي يركز على جذب الشركات المحلية والعالمية للمشاركة في برامجه وفعالياته.", "i18n" => "hisub3"]
              ]
            ],
            [
              "title" => "اتحاد الغرف السعودية",
              "i18n"  => "title9",
              "time"  => "3:15 PM - 4:45 PM",
              "content" => "اتحاد الغرف السعودية",
              "highlights" => [
                ["text" => "اللجنة الوطنية لتقنية المعلومات والاتصالات في مجلس الغرف السعودية.", "i18n" => "hisub4"]
              ]
            ],
            [
              "title" => "مركز كود",
              "i18n"  => "title10",
              "time"  => "3:15 PM - 4:45 PM",
              "content" => "مركز ريادة الأعمال الرقمية",
              "highlights" => [
                ["text" => "الإقامة المميزة هي نوع من الإقامات في السعودية تهدف لجذب واستبقاء المواهب والمحترفين والمستثمرين ورواد الأعمال.", "i18n" => "hisub5"]
              ]
            ]
          ]
        ],

        "throughout" => [
          "title" => "طوال اليوم ",
          "i18n"  => "Throughout",
          "items" => [
            [
              "title" => "لقاءات ثنائية وفرص للتواصل",
              "i18n"  => "title11",
              "time"  => "3:15 PM - 4:45 PM",
              "content" => "لقاءات ثنائية وفرص للتواصل",
              "highlights" => [
                ["text" => "فرص للمشاركين من السعودية والصين للتواصل، ومناقشة سبل التعاون المستقبلي في الاستثمار، والابتكار، وتطوير الأعمال.", "i18n" => "hisub6"]
              ]
            ],
            [
              "title" => "نظرة عامة على ICAIRE",
              "i18n"  => "title11",
              "time"  => "12:15 PM - 3:00 PM",
              "content" => "نظرة عامة على ICAIRE",
              "highlights" => [
                ["text" => "نظرة عامة على المركز الدولي لأبحاث الذكاء الاصطناعي وأخلاقياته (ICAIRE)", "i18n" => "hisub6"]
              ]
            ]
          ]
        ]
      ];
    
}
else
{
    $schedule = [
      "day1" => [
        "title" => " Day 1",
        "i18n"  => "day1",
        "items" => [
          [
            "title" => "Keynotes & Presentations",
            "i18n"  => "title1",
            "time"  => "9:00 AM - 12:00 PM",
            "content" => "Opening remarks and keynote presentations from industry leaders and government officials.",
            "highlights" => []
          ],
          [
            "title" => "Networking Lunch",
            "i18n"  => "title2",
            "time"  => "12:00 PM - 1:30 PM",
            "content" => "Connect with speakers, participants, and industry leaders over lunch.",
            "highlights" => []
          ],
          [
            "title" => "Technical Deep Dives & Workshops",
            "i18n"  => "title3",
            "time"  => "1:30 PM - 5:00 PM",
            "content" => "Hands-on workshops and technical presentations on various open source technologies.",
            "highlights" => []
          ],
          [
            "title" => "Networking Receptions",
            "i18n"  => "title4",
            "time"  => "5:00 PM - 7:00 PM",
            "content" => "Evening reception with refreshments and opportunities for further networking.",
            "highlights" => []
          ]
        ]
      ],

      "day2" => [
        "title" => " Day 2",
        "i18n"  => "day2",
        "items" => [
          [
            "title" => "MCIT",
            "i18n"  => "title5",
            "time"  => "9:00 AM - 10:30 AM",
            "content" => "Ministry of Communications and Information Technology of Saudi Arabia",
            "highlights" => [
              ["text" => "Foreign investment in the ICT sector.", "i18n" => "hisub1"]
            ]
          ],
          [
            "title" => "MISA",
            "i18n"  => "title6",
            "time"  => "10:45 AM - 12:15 PM",
            "content" => "Ministry of Investment for Saudi Arabia (MISA)",
            "highlights" => [
              ["text" => "Updated Investment Law", "i18n" => "hisub2"]
            ]
          ],
          [
            "title" => "Networking Lunch",
            "i18n"  => "title7",
            "time"  => "12:15 PM - 1:30 PM",
            "content" => "Connect with speakers, participants, and industry leaders over lunch.",
            "highlights" => []
          ],
          [
            "title" => "Garage",
            "i18n"  => "title8",
            "time"  => "1:30 PM - 3:00 PM",
            "content" => "Innovation And Entrepreneurship",
            "highlights" => [
              ["text" => "Garage is the new startup district that focuses on local and international startups, scouting and inviting them to join The Garage’s programs and events.", "i18n" => "hisub3"]
            ]
          ],
          [
            "title" => "FSC",
            "i18n"  => "title9",
            "time"  => "3:15 PM - 4:45 PM",
            "content" => "Federation of Saudi Chambers",
            "highlights" => [
              ["text" => "The National Committee for Information and Communications Technology at the Council of Saudi Chambers", "i18n" => "hisub4"]
            ]
          ],
          [
            "title" => "CODE",
            "i18n"  => "title10",
            "time"  => "3:15 PM - 4:45 PM",
            "content" => "Center for Digital Entrepreneurship",
            "highlights" => [
              ["text" => "Premium Residency is a type of residency in Saudi Arabia designed to attract and retain talents, professionals, investors, and entrepreneurs", "i18n" => "hisub5"]
            ]
          ]
        ]
      ],

      "throughout" => [
        "title" => " Throughout the Day",
        "i18n"  => "Throughout",
        "items" => [
          [
            "title" => "Networking & Bilateral Meetings",
            "i18n"  => "title11",
            "time"  => "3:15 PM - 4:45 PM",
            "content" => "Networking & Bilateral Meetings",
            "highlights" => [
              ["text" => "Opportunities for attendees from Saudi Arabia and China to connect, discuss future cooperation, investment, innovation, and business development.", "i18n" => "hisub6"]
            ]
          ],
          [
            "title" => "Overview of ICAIRE",
            "i18n"  => "title11",
            "time"  => "12:15 PM - 3:00 PM",
            "content" => "Overview of ICAIRE",
            "highlights" => [
              ["text" => "Overview of the International Center for Artificial Intelligence Research and Ethics (ICAIRE)", "i18n" => "hisub6"]
            ]
          ]
        ]
      ]
    ];

}
?>
<section class="event-schedule text-center">
  <div class="container">
    <div class="tab_block_main">
  <ul class="tab_options" id="content_res_menu">
    <?php $i = 0; foreach ($schedule as $day): ?>
      <li>
        <a href="#li-<?= $i ?>" <?= $i == 0 ? 'class="active"' : '' ?> data-i18n="<?= $day['i18n'] ?>">
          <?= $day['title'] ?>
        </a>
      </li>
    <?php $i++; endforeach; ?>
  </ul>

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
              <span class="schedule-time" dir="ltr"><?= $item['time'] ?></span>
            </div>

            <div class="schedule-content" style="display: none;">
              <p><?= $item['content'] ?></p>

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