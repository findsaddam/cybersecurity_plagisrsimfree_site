<?php
function renderHome(array $home, array $subjects, array $caseStudies = []): void {
    renderHead($home, SITE_URL . '/', $subjects);
    renderHeader($subjects, $caseStudies);
    $writerSubjectSummaries = [
        'network-security-assignment-help' => 'Student-focused network security assignment assistance to create firewalls, VPNs, IDS/IPS, secure routing, segmentation, packet analysis, lab assistance, and network defence assignments.',
        'ethical-hacking-assignment-help' => 'Authorized University Labs, Methodology, Reconnaissance Concepts, Vulnerability Analysis, Evidence, Remediation, and Professional Report Writing are covered in ethical hacking assignment help.',
        'digital-forensics-assignment-help' => 'Digital forensics assignment help includes all kinds of aspects related to evidence handling, disk and file artefacts, timelines, chain of custody, Autopsy labs, forensic methodology, and structured academic reports.',
        'penetration-testing-assignment-help' => 'Authorised lab methodology, vulnerability validations, risk score, evidence, remediation, executive summary and university report writing assistance for penetration testing assignments.',
        'cryptography-assignment-help' => 'Cryptography assignment helps in encryption, digital signatures, hashing, key exchange, PKI, authentication, cryptographic protocols, calculations, security analysis.',
        'malware-analysis-assignment-help' => 'Malware Analysis Assignment Support: Secure University Labs, concepts of Static analysis and Behavioural analysis, indicators, evidence, defensive interpretation and structured reports.',
        'cloud-computing-assignment-help' => 'Cloud computing assignment service for University students on service models, cloud architecture, virtualisation, deployment models, storage, networking, scalability, AWS, Azure and cloud assignment.',
        'information-security-assignment-help' => 'University students can get help with their information security assignments on CIA triad, risk assessment, security policies, information security governance, access control, threats, controls, compliance, and information security management reports.',
        'cloud-security-assignment-help' => 'University students will get help with cloud security assignments related to IAM, shared responsibility, logging, storage security, cloud risk, AWS, Azure, reports and practicals.',
        'web-application-security-assignment-help' => 'Web Application Security Assignment for University Students including OWASP risks, Authentication, Access Control, Secure Coding, Authorised Testing, Evidence & Remediation Reports.',
        'cyber-threat-intelligence-assignment-help' => 'Cyber threat intelligence university assignment help includes cyber threat actors, indicators, MITRE ATT&CK, intelligence lifecycle and CTI reports.',
    ];
    ?>
<main>
    <section class="hero hero--home">
        <div class="hero-glow hero-glow--one"></div><div class="hero-glow hero-glow--two"></div>
        <div class="container hero__grid">
            <div class="hero__copy reveal">
                <div class="eyebrow"><span class="eyebrow__icon"><?= icon('spark', 17) ?></span> Cybersecurity academic support for university students</div>
                <h1><?= e($home['h1']) ?></h1>
                <p class="hero__lead">Clear guidance on challenging areas of cybersecurity, technical evidence, authorised work in the lab, reports, projects and practical coursework through online cyber security assignment help for students. Plan assignment using the assignment brief, marking rubric and ensure each of the sections has a clear academic purpose.</p>
                <div class="hero__actions">
                    <a class="btn btn--primary" href="<?= e(waLink('cyber security assignment')) ?>" target="_blank" rel="noopener">Discuss Your Assignment <?= icon('arrow', 18) ?></a>
                    <a class="btn btn--ghost" href="#subjects">Explore Subjects</a>
                </div>
                <div class="trust-row">
                    <span><?= icon('check', 17) ?> For university students</span>
                    <span><?= icon('check', 17) ?> Rubric-aware</span>
                    <span><?= icon('check', 17) ?> Private support</span>
                </div>
            </div>
            <?php renderHeroVisual(); ?>
        </div>
        <div class="container stat-strip reveal">
            <div><strong><?= count($subjects) ?></strong><span>Cybersecurity subject areas</span></div>
            <div><strong>24/7</strong><span>WhatsApp enquiries</span></div>
            <div><strong>Lab + Report</strong><span>Practical support</span></div>
            <div><strong>Reports + Labs</strong><span>Coursework guidance</span></div>
        </div>
    </section>

    <section class="section section--light" id="subjects">
        <div class="container">
            <div class="section-head section-head--split reveal">
                <div><span class="section-kicker">Popular subject areas</span><h2>Cyber Security Assignment Topics</h2></div>
                <p>These subject specific pages will give you an understanding of the coursework topics, tools, report structures and questions you will come across frequently in your university classes, whether you are at network defence, cryptography, cloud security or incident response.</p>
            </div>
            <div class="subject-grid">
                <?php $i = 0; foreach ($subjects as $slug => $subject): $i++; ?>
                    <a class="subject-card reveal" style="--delay:<?= $i * 55 ?>ms" href="/<?= e($slug) ?>">
                        <span class="subject-card__number">0<?= $i ?></span>
                        <span class="subject-card__icon"><?= icon($subject['icon'], 26) ?></span>
                        <h3><?= e($subject['nav']) ?> Assignment Help</h3>
                        <p><?= e($writerSubjectSummaries[$slug] ?? $subject['description']) ?></p>
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
                <h2>Cybersecurity Report Writing Help</h2>
                <p>In cybersecurity programs, classes will sometimes be a mixture of tech and classroom. We align the support for cyber security coursework help to the precise criteria of marking and ensure that the report is understandable, evidence based and relevant to the question.</p>
                <div class="feature-list">
                    <div><?= icon('file', 21) ?><span><strong>Report structure</strong><small>Introduction, method, evidence, findings and justified recommendations.</small></span></div>
                    <div><?= icon('terminal', 21) ?><span><strong>Authorised lab guidance</strong><small>Describe safe laboratory output, screenshots and practical observations.</small></span></div>
                    <div><?= icon('book', 21) ?><span><strong>Academic clarity</strong><small>Relate security concepts to sources, risks and scenarios.</small></span></div>
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

<span class="code-success">✓ ready for assignment review</span></code></pre>
            </div>
        </div>
    </section>

    <section class="section" id="how-it-works">
        <div class="container">
            <div class="section-head section-head--center reveal"><span class="section-kicker">Simple process</span><h2>How Cyber Security Assignment Help Works</h2><p>Begin with the assignment brief, marking rubric; organise the concepts, evidence and written analysis around the work required in the module for cyber security assignment help for university students.</p></div>
            <div class="steps-grid">
                <div class="step-card reveal"><span class="step-card__num">01</span><?= icon('message', 28) ?><h3>Share the Brief</h3><p>Provide the question, rubric, deadline, academic level, and any lab instructions and files.</p></div>
                <div class="step-card reveal"><span class="step-card__num">02</span><?= icon('search', 28) ?><h3>Clarify the Scope</h3><p>Find out which parts of the concepts, evidence, tools, and report have the most marks.</p></div>
                <div class="step-card reveal"><span class="step-card__num">03</span><?= icon('file', 28) ?><h3>Build the Work Plan</h3><p>Present theory, practical evidence and academic analysis in a logical order.</p></div>
                <div class="step-card reveal"><span class="step-card__num">04</span><?= icon('check', 28) ?><h3>Review for Clarity</h3><p>Ensure that the parts of the essay respond to the question, give evidence, and support the conclusion.</p></div>
            </div>
        </div>
    </section>

    <section class="section section--soft">
        <div class="container two-col two-col--balanced">
            <div class="reveal">
                <span class="section-kicker">Academic writing & evidence</span>
                <h2>Cyber Security Coursework Help</h2>
                <p class="body-large">Command, screenshot or scan itself is not worthy of good marks in cyber security project help. Typically, students will be required to provide an explanation of what was tested, why the result is important, how it relates to a security principle, and what should be done next.</p>
                <p>It is for this reason that the site is structured around understanding and communication. In each assignment – including those on network defence or digital evidence, cryptography, or an authorized security lab – the material has been selected to help the reader relate technical detail with academic reasoning.</p>
                <a class="text-link" href="/network-security-assignment-help">See a subject example <?= icon('arrow', 17) ?></a>
            </div>
            <div class="insight-grid reveal">
                <div class="insight-card"><span>01</span><h3>Understand the brief</h3><p>Break the question down into specific tasks and assessment criteria.</p></div>
                <div class="insight-card"><span>02</span><h3>Choose useful evidence</h3><p>Only include output that relates directly to an observation or argument.</p></div>
                <div class="insight-card"><span>03</span><h3>Explain security impact</h3><p>Relate the results to C-I-A and Risk.</p></div>
                <div class="insight-card"><span>04</span><h3>Recommend improvements</h3><p>Conduct technical analysis and end with realistic, justifiable defensive measures.</p></div>
            </div>
        </div>
    </section>

    <?php if($caseStudies): $featuredSlug=array_key_first($caseStudies); $featured=$caseStudies[$featuredSlug]; ?>
    <section class="section section--light" id="case-studies">
        <div class="container">
            <div class="section-head section-head--split reveal"><div><span class="section-kicker">Solved Assignment</span><h2><?=e($featured['nav'])?></h2></div><p><?=e($featured['topic_q2'])?> · <?=e($featured['topic_q3'])?> · <?=e($featured['tool_q3'])?></p></div>
            <a class="home-case-card home-case-card--blog reveal" href="/case-studies/<?=e($featuredSlug)?>">
                <div><span class="mini-label"><?=e($featured['eyebrow'])?></span><h3><?=e($featured['nav'])?></h3><p><?=e($featured['q2_intro'])?></p><span class="card-link">Read assignment <?=icon('arrow',17)?></span></div>
            </a>
            <a class="text-link case-index-link" href="/case-studies">Solved Assignments <?=icon('arrow',17)?></a>
        </div>
    </section>
    <?php endif; ?>

    <section class="section" id="faq">
        <div class="container faq-layout">
            <div class="faq-intro reveal"><span class="section-kicker">Common questions</span><h2>Cyber Security Assignment FAQs</h2><p>Quick answers for students planning coursework, reports and authorised practical labs.</p><a class="btn btn--dark" href="<?= e(waLink()) ?>" target="_blank" rel="noopener">Ask on WhatsApp</a></div>
            <div class="faq-list reveal">
                <?php foreach ($home['faqs'] as $faq): ?>
                    <div class="faq-item"><button type="button" aria-expanded="false"><span><?= e($faq[0]) ?></span><b>+</b></button><div class="faq-answer"><p><?= e($faq[1]) ?></p></div></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-box reveal">
            <div><span class="section-kicker section-kicker--light">Assignment support</span><h2>Cyber Security Assignment Help</h2><p>Send the module question, deadline and marking criteria so the requirements can be reviewed together.</p></div>
            <a class="btn btn--white" href="<?= e(waLink()) ?>" target="_blank" rel="noopener">Message on WhatsApp <?= icon('arrow', 18) ?></a>
        </div>
    </section>
</main>
<?php
    renderFooter($subjects);
}
