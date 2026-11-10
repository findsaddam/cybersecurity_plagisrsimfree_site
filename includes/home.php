<?php
function renderHome(array $home, array $subjects): void {
    renderHead($home, SITE_URL . '/', $subjects);
    renderHeader($subjects);
    ?>
<main>
    <section class="hero hero--home">
        <div class="hero-glow hero-glow--one"></div><div class="hero-glow hero-glow--two"></div>
        <div class="container hero__grid">
            <div class="hero__copy reveal">
                <div class="eyebrow"><span class="eyebrow__icon"><?= icon('spark', 17) ?></span> Cybersecurity academic support for university students</div>
                <h1><?= e($home['h1']) ?></h1>
                <p class="hero__lead">Understand difficult cybersecurity topics, organise technical evidence and turn your assignment brief into a clear academic plan. Get focused support for theory, authorised labs, reports, projects and practical coursework.</p>
                <div class="hero__actions">
                    <a class="btn btn--primary" href="<?= e(waLink('cyber security assignment')) ?>" target="_blank" rel="noopener">Discuss Your Assignment <?= icon('arrow', 18) ?></a>
                    <a class="btn btn--ghost" href="#subjects">Explore Subjects</a>
                </div>
                <div class="trust-row">
                    <span><?= icon('check', 17) ?> Student-focused</span>
                    <span><?= icon('check', 17) ?> Rubric-aware</span>
                    <span><?= icon('check', 17) ?> Private support</span>
                </div>
            </div>
            <?php renderHeroVisual(); ?>
        </div>
        <div class="container stat-strip reveal">
            <div><strong>6</strong><span>Focused cyber subjects</span></div>
            <div><strong>24/7</strong><span>WhatsApp enquiries</span></div>
            <div><strong>Lab + Report</strong><span>Practical support</span></div>
            <div><strong>100%</strong><span>Student-first content</span></div>
        </div>
    </section>

    <section class="section section--light" id="subjects">
        <div class="container">
            <div class="section-head section-head--split reveal">
                <div><span class="section-kicker">Popular subject areas</span><h2>Cyber Security Assignment Help for High-Demand Modules</h2></div>
                <p>Choose the page that matches your module. Each subject focuses on the concepts, evidence, reporting patterns and practical workflow students actually meet in coursework.</p>
            </div>
            <div class="subject-grid">
                <?php $i = 0; foreach ($subjects as $slug => $subject): $i++; ?>
                    <a class="subject-card reveal" style="--delay:<?= $i * 55 ?>ms" href="/<?= e($slug) ?>">
                        <span class="subject-card__number">0<?= $i ?></span>
                        <span class="subject-card__icon"><?= icon($subject['icon'], 26) ?></span>
                        <h3><?= e($subject['nav']) ?> Assignment Help</h3>
                        <p><?= e($subject['description']) ?></p>
                        <span class="card-link">Explore subject <?= icon('arrow', 17) ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--dark-split">
        <div class="container two-col">
            <div class="feature-panel reveal">
                <span class="section-kicker section-kicker--light">Built around the assignment brief</span>
                <h2>From Technical Evidence to a Clear Cybersecurity Report</h2>
                <p>Cybersecurity coursework often combines technical work with academic explanation. We organise support around the exact marking criteria so the report remains understandable, evidence-led and relevant to the question.</p>
                <div class="feature-list">
                    <div><?= icon('file', 21) ?><span><strong>Report structure</strong><small>Introduction, method, evidence, findings and justified recommendations.</small></span></div>
                    <div><?= icon('terminal', 21) ?><span><strong>Authorised lab guidance</strong><small>Explain safe lab output, screenshots and practical observations.</small></span></div>
                    <div><?= icon('book', 21) ?><span><strong>Academic clarity</strong><small>Connect security concepts with sources, risk and the scenario.</small></span></div>
                </div>
            </div>
            <div class="code-panel reveal">
                <div class="code-panel__bar"><span></span><span></span><span></span><small>assignment-review.txt</small></div>
                <pre><code><span class="code-muted">01</span>  scope       = "authorised academic task"
<span class="code-muted">02</span>  brief       = "mapped to marking rubric"
<span class="code-muted">03</span>  evidence    = "screenshots + explanation"
<span class="code-muted">04</span>  analysis    = "risk + security reasoning"
<span class="code-muted">05</span>  output      = "clear student report"
<span class="code-muted">06</span>  privacy     = <span class="code-accent">true</span>

<span class="code-success">✓ ready for focused support</span></code></pre>
            </div>
        </div>
    </section>

    <section class="section" id="how-it-works">
        <div class="container">
            <div class="section-head section-head--center reveal"><span class="section-kicker">Simple process</span><h2>How Cyber Security Assignment Support Works</h2><p>Start with the brief. The support stays focused on what your module actually asks you to understand and submit.</p></div>
            <div class="steps-grid">
                <div class="step-card reveal"><span class="step-card__num">01</span><?= icon('message', 28) ?><h3>Share the Brief</h3><p>Send the question, rubric, deadline, academic level and any lab instructions or files.</p></div>
                <div class="step-card reveal"><span class="step-card__num">02</span><?= icon('search', 28) ?><h3>Clarify the Scope</h3><p>Identify the concepts, evidence, tools and report sections that carry the most marks.</p></div>
                <div class="step-card reveal"><span class="step-card__num">03</span><?= icon('file', 28) ?><h3>Build the Work Plan</h3><p>Organise theory, practical evidence and academic analysis into a logical sequence.</p></div>
                <div class="step-card reveal"><span class="step-card__num">04</span><?= icon('check', 28) ?><h3>Review for Clarity</h3><p>Check that each section answers the question, explains the evidence and supports the conclusion.</p></div>
            </div>
        </div>
    </section>

    <section class="section section--soft">
        <div class="container two-col two-col--balanced">
            <div class="reveal">
                <span class="section-kicker">Student-first writing</span>
                <h2>Cybersecurity Coursework Should Explain, Not Just Display Tools</h2>
                <p class="body-large">A command, screenshot or scan result does not earn strong marks by itself. Students usually need to explain what was tested, why the result matters, how it relates to a security principle and what should happen next.</p>
                <p>That is why the site is organised around understanding and communication. Whether the assignment covers network defence, digital evidence, cryptography or an authorised security lab, the content is designed to help the reader connect technical detail with academic reasoning.</p>
                <a class="text-link" href="/network-security-assignment-help">See a subject example <?= icon('arrow', 17) ?></a>
            </div>
            <div class="insight-grid reveal">
                <div class="insight-card"><span>01</span><h3>Understand the brief</h3><p>Translate the question into concrete deliverables and marking criteria.</p></div>
                <div class="insight-card"><span>02</span><h3>Choose useful evidence</h3><p>Include only output that directly supports an observation or argument.</p></div>
                <div class="insight-card"><span>03</span><h3>Explain security impact</h3><p>Connect findings to confidentiality, integrity, availability and risk.</p></div>
                <div class="insight-card"><span>04</span><h3>Recommend improvements</h3><p>End technical analysis with realistic, justified defensive actions.</p></div>
            </div>
        </div>
    </section>

    <section class="section" id="faq">
        <div class="container faq-layout">
            <div class="faq-intro reveal"><span class="section-kicker">Common questions</span><h2>Cyber Security Assignment Help FAQs</h2><p>Quick answers for students planning coursework, reports and authorised practical labs.</p><a class="btn btn--dark" href="<?= e(waLink()) ?>" target="_blank" rel="noopener">Ask on WhatsApp</a></div>
            <div class="faq-list reveal">
                <?php
                $homeFaqs = [
                    ['What types of cybersecurity assignments can you help with?', 'Support covers the six focused subject areas on this website, including theory questions, coursework planning, authorised lab reports, practical evidence, projects and technical report structure.'],
                    ['Can I share screenshots and a marking rubric?', 'Yes. A rubric and relevant screenshots make it easier to identify what the assessor expects and how each piece of evidence should be explained.'],
                    ['Do you support urgent deadlines?', 'You can send the brief and deadline on WhatsApp. The first step is to review the scope and identify what can be addressed clearly within the available time.'],
                    ['Is the support suitable for practical cybersecurity labs?', 'Yes, where the work is authorised academic activity. The emphasis is on safe methodology, evidence interpretation, defensive understanding and report writing.'],
                    ['Can I get help with report structure and references?', 'Yes. Guidance can cover section planning, academic flow, technical explanation, evidence captions, conclusions and how to integrate credible sources appropriately.'],
                ];
                foreach ($homeFaqs as $faq): ?>
                    <div class="faq-item"><button type="button" aria-expanded="false"><span><?= e($faq[0]) ?></span><b>+</b></button><div class="faq-answer"><p><?= e($faq[1]) ?></p></div></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-box reveal">
            <div><span class="section-kicker section-kicker--light">Ready when you are</span><h2>Share Your Cybersecurity Assignment Brief</h2><p>Send the module question, deadline and marking criteria. Start with the exact task, not a generic form.</p></div>
            <a class="btn btn--white" href="<?= e(waLink()) ?>" target="_blank" rel="noopener">Message on WhatsApp <?= icon('arrow', 18) ?></a>
        </div>
    </section>
</main>
<?php
    renderFooter($subjects);
}
