<?php
function renderSubject(string $slug, array $page, array $subjects): void {
    $canonical = SITE_URL . '/' . $slug;
    renderHead($page, $canonical, $subjects);
    renderHeader($subjects);
    ?>
<main>
    <section class="hero hero--subject">
        <div class="hero-glow hero-glow--one"></div><div class="hero-glow hero-glow--two"></div>
        <div class="container subject-hero__grid">
            <div class="hero__copy reveal">
                <div class="breadcrumbs"><a href="/">Home</a><span>/</span><span><?= e($page['nav']) ?></span></div>
                <div class="eyebrow"><span class="eyebrow__icon"><?= icon($page['icon'], 17) ?></span> <?= e($page['eyebrow']) ?></div>
                <h1><?= e($page['h1']) ?></h1>
                <p class="hero__lead"><?= e($page['intro']) ?></p>
                <div class="hero__actions">
                    <a class="btn btn--primary" href="<?= e(waLink($page['primary'])) ?>" target="_blank" rel="noopener">Get Subject Help <?= icon('arrow', 18) ?></a>
                    <a class="btn btn--ghost" href="#support-areas">View Support Areas</a>
                </div>
                <div class="keyword-pills">
                    <?php foreach (array_slice($page['secondary'], 0, 3) as $keyword): ?><span><?= e($keyword) ?></span><?php endforeach; ?>
                </div>
            </div>
            <div class="subject-hero-card reveal">
                <div class="subject-hero-card__top"><span class="subject-card__icon subject-card__icon--large"><?= icon($page['icon'], 34) ?></span><span>Subject focus</span></div>
                <h2><?= e($page['nav']) ?></h2>
                <p>Practical student support built around the question, rubric and evidence required by the module.</p>
                <ul>
                    <li><?= icon('check', 17) ?> Theory + practical coursework</li>
                    <li><?= icon('check', 17) ?> Clear technical explanations</li>
                    <li><?= icon('check', 17) ?> Report and evidence structure</li>
                    <li><?= icon('check', 17) ?> Authorised-use guidance</li>
                </ul>
                <div class="subject-hero-card__footer"><span><?= icon('clock', 17) ?> Fast brief review</span><span><?= icon('lock', 17) ?> Private</span></div>
            </div>
        </div>
    </section>

    <section class="section section--light" id="support-areas">
        <div class="container">
            <div class="section-head section-head--split reveal"><div><span class="section-kicker">Where students get stuck</span><h2><?= e($page['nav']) ?> Coursework Help</h2></div><p>Each area below targets a common challenge students face when a cybersecurity module combines technical work with academic explanation.</p></div>
            <div class="problem-grid">
                <?php foreach ($page['problems'] as $i => $item): ?>
                    <div class="problem-card reveal" style="--delay:<?= ($i + 1) * 60 ?>ms"><span class="problem-card__num">0<?= $i + 1 ?></span><h3><?= e($item['title']) ?></h3><p><?= e($item['text']) ?></p></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--dark-split">
        <div class="container two-col two-col--balanced">
            <div class="reveal">
                <span class="section-kicker section-kicker--light">Topic coverage</span>
                <h2><?= e($page['nav']) ?> Assignment Topics</h2>
                <p class="body-large body-large--light">The page stays focused on the core concepts students are most likely to meet in university coursework and practical labs.</p>
                <a class="btn btn--outline-light" href="<?= e(waLink($page['primary'])) ?>" target="_blank" rel="noopener">Discuss Your Topic <?= icon('arrow', 17) ?></a>
            </div>
            <div class="topic-list reveal">
                <?php foreach ($page['topics'] as $i => $topic): ?><div><span><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span><strong><?= e($topic) ?></strong></div><?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section" id="how-it-works">
        <div class="container">
            <div class="section-head section-head--center reveal"><span class="section-kicker">Practical workflow</span><h2><?= e($page['nav']) ?> Assignment Guide</h2><p>A repeatable workflow helps students stay aligned with the brief instead of jumping between tools and screenshots.</p></div>
            <div class="timeline">
                <?php foreach ($page['workflow'] as $i => $step): ?>
                    <div class="timeline__item reveal"><div class="timeline__marker"><?= $i + 1 ?></div><div><h3><?= e($step[0]) ?></h3><p><?= e($step[1]) ?></p></div></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--soft">
        <div class="container two-col">
            <div class="tool-panel reveal">
                <span class="section-kicker">Tools & platforms</span>
                <h2><?= e($page['nav']) ?> Tools and Labs</h2>
                <p>Tools are useful only when the report explains their purpose, output and limitations. These are common examples students may encounter in authorised coursework.</p>
                <div class="tool-tags"><?php foreach ($page['tools'] as $tool): ?><span><?= icon('terminal', 15) ?> <?= e($tool) ?></span><?php endforeach; ?></div>
                <div class="safe-note"><?= icon('shield', 21) ?><p><strong>Safe academic use:</strong> practical security activity should only be performed on systems you own or have explicit permission to test.</p></div>
            </div>
            <div class="report-panel reveal">
                <span class="mini-label">Suggested report flow</span>
                <h3>A Clear <?= e($page['nav']) ?> Report Structure</h3>
                <ol><?php foreach ($page['structure'] as $section): ?><li><span></span><?= e($section) ?></li><?php endforeach; ?></ol>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container content-split">
            <article class="long-copy reveal">
                <span class="section-kicker">Coursework guide</span>
                <h2><?= e($page['nav']) ?> Report Writing Help</h2>
                <p>A <?= e($page['nav']) ?> assignment can combine unfamiliar terminology, practical evidence and a report that must satisfy a detailed marking rubric. A useful starting point is to separate the work into three questions: what concept must be understood, what evidence must be produced, and what analysis must be written around that evidence.</p>
                <p>For technical sections, clarity matters more than volume. A small number of well-chosen screenshots, diagrams or result extracts can be stronger than pages of raw output when each item has a caption and an explanation. The reader should be able to see what was done, what the result means and how it answers the assessment question.</p>
                <p>For academic sections, definitions should lead into comparison and judgement. Explain why a security control, method or interpretation is appropriate for the scenario, where it has limitations, and what alternative might be considered. This is where a student moves from describing cybersecurity to analysing it.</p>
                <p>The final review should check alignment with the rubric. Every major section should have a reason to exist, every figure should be referenced in the text, and every recommendation should connect to a finding or stated risk. This makes the coursework easier to follow, verify and assess.</p>
            </article>
            <aside class="keyword-box reveal">
                <span class="mini-label">Before you start</span>
                <h3>Assignment Checklist</h3>
                <div class="feature-list">
                    <div><?= icon('check', 18) ?><span><strong>Assignment question</strong><small>Keep the exact task and learning outcomes visible while you work.</small></span></div>
                    <div><?= icon('check', 18) ?><span><strong>Marking rubric</strong><small>Match report sections and evidence to the criteria that carry marks.</small></span></div>
                    <div><?= icon('check', 18) ?><span><strong>Lab requirements</strong><small>Confirm the permitted environment, tools, screenshots and evidence format.</small></span></div>
                    <div><?= icon('check', 18) ?><span><strong>Submission rules</strong><small>Check word count, referencing style, file format and deadline.</small></span></div>
                </div>
                <a href="<?= e(waLink($page['primary'])) ?>" class="text-link" target="_blank" rel="noopener">Ask about your assignment <?= icon('arrow', 16) ?></a>
            </aside>
        </div>
    </section>

    <section class="section section--light" id="faq">
        <div class="container faq-layout">
            <div class="faq-intro reveal"><span class="section-kicker">Common questions</span><h2><?= e($page['nav']) ?> Assignment FAQs</h2><p>Short answers to questions students commonly ask before starting practical or written work.</p><a class="btn btn--dark" href="<?= e(waLink($page['primary'])) ?>" target="_blank" rel="noopener">Ask Your Question</a></div>
            <div class="faq-list reveal">
                <?php foreach ($page['faqs'] as $faq): ?><div class="faq-item"><button type="button" aria-expanded="false"><span><?= e($faq[0]) ?></span><b>+</b></button><div class="faq-answer"><p><?= e($faq[1]) ?></p></div></div><?php endforeach; ?>
                <div class="faq-item"><button type="button" aria-expanded="false"><span>What should I send before asking for help?</span><b>+</b></button><div class="faq-answer"><p>Send the assignment question, marking rubric, deadline, academic level and any relevant lab instructions, screenshots or required format.</p></div></div>
            </div>
        </div>
    </section>

    <section class="related-section">
        <div class="container">
            <div class="section-head section-head--split reveal"><div><span class="section-kicker">Continue learning</span><h2>Related Cybersecurity Assignment Help</h2></div><p>Cybersecurity assignments often connect several areas. These related pages cover topics that commonly overlap with this subject.</p></div>
            <div class="related-grid">
                <?php $shown = 0; foreach ($subjects as $relatedSlug => $subject): if ($relatedSlug === $slug) continue; $shown++; if ($shown > 3) break; ?>
                    <a class="related-card reveal" href="/<?= e($relatedSlug) ?>"><span><?= icon($subject['icon'], 22) ?></span><div><h3><?= e($subject['nav']) ?></h3><p><?= e($subject['eyebrow']) ?></p></div><?= icon('arrow', 17) ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-box reveal">
            <div><span class="section-kicker section-kicker--light">Your brief comes first</span><h2><?= e($page['nav']) ?> Assignment Help</h2><p>Share the task, deadline and rubric for guidance based on your assignment requirements.</p></div>
            <a class="btn btn--white" href="<?= e(waLink($page['primary'])) ?>" target="_blank" rel="noopener">Send Brief on WhatsApp <?= icon('arrow', 18) ?></a>
        </div>
    </section>
</main>
<?php
    renderFooter($subjects);
}
