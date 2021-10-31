<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upgrade - Documentation BETA</title>

    <link rel="stylesheet" href="./css/min/simple.min.css">
    <link rel="stylesheet" href="./css/min/docs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/a4ede3fed3.js" crossorigin="anonymous"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/simple.js"></script>
    <script src="js/alerts.js"></script>
    <script src="js/tabs.js"></script>
</head>
<body class="bg-main-dark">

<!--

Data Attributes

data-[...]
docu-title: Name of the Element (displayed in documentation as heading).
docu-description: Description of the Element.
docu-colorable: Element is colorable.
docu-beta: Element is in beta state.
docu-refer: Similar elements.
docu-tip: Tip (under code example).

-->

<main class="box-lg my-5 my-lg-10">
    <header class="mb-2 mb-lg-5">
        <h1 class="fsi-xl fc-white-darker fs-underline">Documentation</h1>

        <p class="fc-gray-lightest">
            This version of the documentation is currently incomplete, but will be constantly updated, it is
            recommended to use the beta version only to see how the documentation will be built in the future.
        </p>
    </header>

    <div class="d-flex flex-d-column gy-3 gy-lg-5">
        <div class="docu-element" data-docu-title="Alert"
             data-docu-description="Alerts are a practical way to inform the user of your website about completed processes, errors, or similar."
             data-docu-colorable data-docu-needs-js>
            <div class="example">
                <div class="alert-main mb-1">
                    <i class="bi bi-info-circle-fill"></i>
                    <p>This is a simple alert! You can use it for barely everything.</p>
                </div>

                <div class="alert-error mb-1" data-alert-closable>
                    <i class="bi bi-info-circle-fill"></i>
                    <p>This alert is closable by clicking on the 'X'.</p>
                </div>

                <div class="alert-success mb-1" data-alert-autoclose="10000">
                    <i class="bi bi-info-circle-fill"></i>
                    <p>This alert will dismiss automatically after 10.000ms (10s).</p>
                </div>
            </div>
        </div>

        <div class="docu-element" data-docu-title="Badge"
             data-docu-description="Badges are a great way to display, for example, new features."
             data-docu-colorable data-example-centered>
            <div class="example">
                <p>Lorem ipsum dolor sit. <span class="badge-warning"><i class="bi bi-star-fill"></i>New</span></p>
            </div>
        </div>

        <div class="docu-element" data-docu-title="Button"
             data-docu-description="I guess there's no description needed."
             data-docu-colorable data-example-centered>
            <div class="example">
                <button class="btn-main">Button</button>
            </div>
        </div>

        <div class="docu-element" data-docu-title="Tab"
             data-docu-description="Sort some information"
             data-example-centered data-docu-needs-js>
            <div class="example">
                <div class="tabs">
                    <div class="tab-wrapper">
                        <div class="tab fc-main" data-tab-toggle="1" data-tab-active>#1</div>
                        <div class="tab fc-main" data-tab-toggle="2">#2</div>
                        <div class="tab fc-main" data-tab-toggle="3">#3</div>
                    </div>

                    <div class="tab-panel" data-tab-listen="1" data-tab-active>
                        <div class="tab-content">
                            <h3>This is the first section.</h3>
                            <p class="fc-dark">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dicta nulla
                                pariatur quasi quis voluptate? Eveniet, quas, veritatis! Cum, tempore?
                            </p>
                        </div>
                    </div>

                    <div class="tab-panel" data-tab-listen="2">
                        <div class="tab-content">
                            <h3>This is the second section.</h3>
                            <p class="fc-dark">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi assumenda, commodi
                                consequatur cum delectus dignissimos doloremque eius hic id illum in iusto minus modi
                                officiis praesentium quibusdam recusandae reprehenderit sed unde ut vitae voluptate
                                voluptatum. Aperiam assumenda aut, cumque cupiditate eligendi fuga inventore iure, neque
                                nesciunt non sint ullam!
                            </p>
                        </div>
                    </div>

                    <div class="tab-panel" data-tab-listen="3">
                        <div class="tab-content">
                            <h3>This is the third section.</h3>
                            <img src="https://via.placeholder.com/1280x720" class="mt-1 mt-lg-3"
                                 style="object-fit: cover; width: 100%; height: 100%; border-radius: 5px;">

                            <div>
                                <p class="fc-main fw-semibold fsi-large">Another Heading</p>
                                <p class="fc-dark">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci
                                    aliquid
                                    amet architecto at deserunt dolor dolore dolorem dolores doloribus ea eaque earum
                                    exercitationem facilis fuga fugiat hic illo iste, iusto libero magni neque nobis
                                    officiis omnis possimus quis quo quod rerum sequi sit ullam unde veniam voluptate?
                                    Aliquam corporis enim facere fugiat maxime mollitia, officia porro quaerat quas qui?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script>
    /* Actual JS */
    document.querySelectorAll('div.docu-element').forEach(function (docuelement) {
        var id = docuelement.dataset.docuTitle.toLowerCase().replaceAll(' ', '-');
        docuelement.id = id;
        docuelement.classList.add("d-flex", "flex-d-column", "gy-5", "gy-lg-7");
        docuelement.innerHTML = '<div><h1 class="fc-main fw-bold fsi-xl"><a href="#' + id + '" class="fc-gray-dark" style="font-size: inherit;">#</a> ' + docuelement.dataset.docuTitle + '</h1>' + '<p>' + docuelement.dataset.docuDescription + '</p></div><div><div class="tabs"><div class="tab-wrapper"><div class="tab fc-main" data-tab-toggle="1" data-tab-active>Example</div><div class="tab fc-main" data-tab-toggle="2">Code</div></div><div class="tab-panel" data-tab-listen="1" data-tab-active><div class="tab-content">' + docuelement.innerHTML + '</div></div></div>';

        var title = docuelement.querySelector('h1');
        var badges = "";

        if ("docuColorable" in docuelement.dataset) {
            badges += "<div style='display: inline-block;' class='tooltip-wrapper'><span class='badge-success m-0'><i class='bi bi-brush-fill'></i>Colorable</span><div class='tooltip'><div class='tooltip-content'><p class='tooltip-title'>Element is customizable</p><p class='tooltip-description'>You have the option to tint this element. Just use the <code>" + docuelement.dataset.docuTitle.toLowerCase().replaceAll(' ', '-') + "-[color]</code> class instead of the <code>" + docuelement.dataset.docuTitle.toLowerCase().replaceAll(' ', '-') + "</code> class. <code>[color]</code> corresponds in this case to a color from the color scheme of Upgrade, which is also used for text colors and the like. Example: main-dark</p></div></div></div>";
        }
        if ("docuNeedsJs" in docuelement.dataset) {
            badges += "<div style='display: inline-block;' class='tooltip-wrapper'><span class='badge-warning-dark m-0'><i class='bi bi-gear-fill'></i>JavaScript</span><div class='tooltip'><div class='tooltip-content'><p class='tooltip-title'>May require JavaScript</p><p class='tooltip-description'>Some of the functionalities of this element may require you to include the <code>" + docuelement.dataset.docuTitle.toLowerCase().replaceAll(' ', '-') + "s.js</code> file, located in the <code>/js</code> folder of this framework, using a script tag.</p></div></div></div>";
        }
        if ("docuBeta" in docuelement.dataset) {
            badges += "<div style='display: inline-block;' class='tooltip-wrapper'><span class='badge-error-lighter m-0'><i class='bi bi-bug-fill'></i>Beta</span><div class='tooltip'><div class='tooltip-content'><p class='tooltip-title'>In Beta State</p><p class='tooltip-description'>This element is currently under development and therefore should not be used on public pages due to possible bugs.</p></div></div></div>";
        }

        /* Add Badges to title */
        title.outerHTML = "<div class='d-flex flex-a-center gx-2 gx-lg-5'>" + title.outerHTML + "<div class='d-flex flex-a-center gx-1 gx-lg-2'>" + badges + "</div></div>";

        /* Add Example Code */
        docuelement.querySelector('.tabs').innerHTML += "<div class='tab-panel' data-tab-listen='2'><div class='tab-content'><div class='code'><i class='fas fa-copy copy fc-white-darker'></i><pre><code class='language-html sc'>" + docuelement.querySelector('.example').innerHTML.replaceAll('<', '&lt;').replaceAll('>', '&gt;') + "</code></pre></div></div></div>";
        // TODO: Fix last empty line.

        /* Under Example Code */
        if ("docuTip" in docuelement.dataset) {
            docuelement.innerHTML += "<div><h2 class='fc-main fw-bold fsi-small'>Tips</h2><p>" + docuelement.dataset.docuTip + "</p></div>";
        }

        /* Add Referings */
        if ("docuRefer" in docuelement.dataset) {
            var similar = "<div><h2 class='fc-main-light fw-semibold fsi-small'>Related Elements</h2><ul class='similarElements'>";

            docuelement.dataset.docuRefer.split(' ').forEach(refer => {
                similar += "<li><a href='#" + refer + "' class='badge-main-light m-0'>" + refer + "</a></li>";
            });

            similar += "</ul></div>";

            docuelement.innerHTML += similar;
        }
    });
</script>

<script>
    /* Display Code normally */
    $("pre code").each(function () {
        var html = $(this).html();
        var pattern = html.match(/\s*\n[\t\s]*/);
        $(this).html(html.replace(new RegExp(pattern, "g"), '\n'));
    });

    document.querySelectorAll('.code .copy').forEach(btn => {
        btn.addEventListener('click', function () {
            copyTextToClipboard(btn.parentNode.querySelector('.sc').innerText);
        })
    });
</script>

<script src="../../../assets/js/framework.js" defer></script>

</body>
</html>
