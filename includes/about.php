<?php
function renderAbout(array $page, array $subjects, array $caseStudies = []): void {
    $canonical = SITE_URL . '/about';
    renderHead($page, $canonical, $subjects);
    renderHeader($subjects, $caseStudies);
    ?>
<main>
    <section class="hero hero--subject">
        <div class="hero-glow hero-glow--one"></div><div class="hero-glow hero-glow--two"></div>
        <div class="container subject-hero__grid">
            <div class="hero__copy reveal">
                <div class="breadcrumbs"><a href="/">Home</a><span>/</span><span>About</span></div>
                <div class="eyebrow"><span class="eyebrow__icon"><?=icon('shield',17)?></span> Editorial standards, technical sources & academic integrity</div>
                <h1><?=e($page['h1'])?></h1>
                <p class="hero__lead">CyberAssignment.com is a student-focused cybersecurity learning and coursework support website. We organise guidance around university assignment requirements, technical concepts, authorised practical work, evidence interpretation and clear academic reporting.</p>
                <div class="hero__actions">
                    <a class="btn btn--primary" href="/#subjects">Explore Subjects <?=icon('arrow',18)?></a>
                    <a class="btn btn--ghost" href="/case-studies">View Case Studies</a>
                </div>
            </div>
            <div class="subject-hero-card reveal">
                <div class="subject-hero-card__top"><span class="subject-card__icon subject-card__icon--large"><?=icon('book',34)?></span><span>Trust & transparency</span></div>
                <h2>How We Approach Content</h2>
                <p>Our goal is to make cybersecurity coursework guidance useful, technically grounded and transparent about its educational scope.</p>
                <ul>
                    <li><?=icon('check',17)?> Student-focused explanations</li>
                    <li><?=icon('check',17)?> Authorised security context</li>
                    <li><?=icon('check',17)?> Recognised technical sources</li>
                    <li><?=icon('check',17)?> Clear evidence and reporting guidance</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section--light">
        <div class="container">
            <div class="section-head section-head--split reveal">
                <div><span class="section-kicker">About the website</span><h2>What CyberAssignment.com Covers</h2></div>
                <p>CyberAssignment.com publishes guidance for university students working across network security, ethical hacking, digital forensics, penetration testing, cryptography, malware analysis, cloud computing, information security, cloud security, web application security and cyber threat intelligence.</p>
            </div>
            <div class="insight-grid">
                <div class="insight-card reveal"><span>01</span><h3>Coursework understanding</h3><p>We explain what an assignment is asking, how technical concepts relate to the scenario and how students can organise the work around the marking criteria.</p></div>
                <div class="insight-card reveal"><span>02</span><h3>Evidence interpretation</h3><p>Technical output, screenshots, logs and tool results are most useful when the reader can understand what they show, what they do not prove and why they matter.</p></div>
                <div class="insight-card reveal"><span>03</span><h3>Report structure</h3><p>Guidance focuses on turning technical observations into clear methodology, findings, risk discussion, limitations, recommendations and conclusions.</p></div>
                <div class="insight-card reveal"><span>04</span><h3>Defensive learning</h3><p>Practical security material is framed around authorised labs, owned systems and environments where explicit permission exists.</p></div>
            </div>
        </div>
    </section>

    <section class="section" id="editorial-standards">
        <div class="container two-col two-col--balanced">
            <div class="reveal">
                <span class="section-kicker">Editorial standards</span>
                <h2>How We Prepare and Review Technical Content</h2>
                <p class="body-large">Content is prepared to answer real coursework questions clearly rather than to repeat keywords. We aim to separate observed evidence from interpretation, avoid unsupported technical claims and explain limitations where they affect the conclusion.</p>
                <p>When a topic depends on a standard, framework, platform behaviour or security methodology, we prefer primary or recognised technical sources. Depending on the subject, these can include NIST publications, OWASP guidance, MITRE ATT&CK, IETF/RFC material, Wireshark documentation and official cloud-provider documentation.</p>
                <p>Pages may be corrected or updated when technical guidance, standards, tools or the educational context changes. A page should not claim certainty where the available evidence only supports a qualified conclusion.</p>
            </div>
            <div class="feature-panel reveal">
                <span class="section-kicker">Editorial checklist</span>
                <h2>What We Look For</h2>
                <div class="feature-list">
                    <div><?=icon('check',21)?><span><strong>Technical accuracy</strong><small>Definitions and security principles should be consistent with recognised technical guidance.</small></span></div>
                    <div><?=icon('check',21)?><span><strong>Evidence before conclusions</strong><small>Tool output or a screenshot should be interpreted rather than treated as proof by itself.</small></span></div>
                    <div><?=icon('check',21)?><span><strong>Clear scope</strong><small>Practical security activity must stay within the authorised academic environment.</small></span></div>
                    <div><?=icon('check',21)?><span><strong>Useful sourcing</strong><small>Primary technical documentation is preferred when it materially supports the explanation.</small></span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--soft" id="academic-integrity">
        <div class="container">
            <div class="section-head section-head--split reveal">
                <div><span class="section-kicker">Responsible use</span><h2>Academic Integrity and Authorised Security Work</h2></div>
                <p>Students are responsible for following their university's academic-integrity, assessment and collaboration rules. Guidance should be used to understand requirements, improve technical reasoning and prepare coursework in a way that complies with the student's institution and module.</p>
            </div>
            <div class="problem-grid">
                <div class="problem-card reveal"><span class="problem-card__num">01</span><h3>Authorised environments</h3><p>Security testing and analysis should be performed only in university labs, training environments, systems you own or systems you have explicit permission to assess.</p></div>
                <div class="problem-card reveal"><span class="problem-card__num">02</span><h3>Student responsibility</h3><p>Students should understand the work they submit and follow the rules that apply to assistance, referencing, collaboration and use of external resources.</p></div>
                <div class="problem-card reveal"><span class="problem-card__num">03</span><h3>Defensive purpose</h3><p>Security concepts are presented for learning, analysis, risk reduction and defensive improvement rather than unauthorised access or misuse.</p></div>
                <div class="problem-card reveal"><span class="problem-card__num">04</span><h3>Corrections</h3><p>If a technical explanation appears unclear or inaccurate, readers can contact us so the relevant page can be reviewed against appropriate technical sources.</p></div>
            </div>
        </div>
    </section>

    <section class="section section--light" id="sources">
        <div class="container">
            <div class="section-head section-head--split reveal">
                <div><span class="section-kicker">Source standards</span><h2>Technical Sources We Prefer</h2></div>
                <p>We prioritise sources that are closest to the technical standard, framework, product or methodology being discussed. Secondary sources may be useful for context, but primary documentation is preferred for technical claims.</p>
            </div>
            <div class="related-grid">
                <a class="related-card reveal" href="https://www.nist.gov/publications/nist-cybersecurity-framework-csf-20" target="_blank" rel="noopener"><span><?=icon('book',22)?></span><div><h3>NIST</h3><p>Cybersecurity standards, risk guidance and technical publications.</p></div><?=icon('arrow',17)?></a>
                <a class="related-card reveal" href="https://wstg.owasp.org/" target="_blank" rel="noopener"><span><?=icon('shield',22)?></span><div><h3>OWASP</h3><p>Web application security testing and defensive application-security guidance.</p></div><?=icon('arrow',17)?></a>
                <a class="related-card reveal" href="https://attack.mitre.org/" target="_blank" rel="noopener"><span><?=icon('search',22)?></span><div><h3>MITRE ATT&CK</h3><p>Adversary tactics, techniques and behaviour knowledge base.</p></div><?=icon('arrow',17)?></a>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-box reveal">
            <div><span class="section-kicker section-kicker--light">Questions or corrections</span><h2>Contact CyberAssignment.com</h2><p>For a coursework question, technical clarification or correction request, contact us through the same support channel used across the website.</p></div>
            <a class="btn btn--white" href="<?=e(waLink('CyberAssignment website question'))?>" target="_blank" rel="noopener">Message on WhatsApp <?=icon('arrow',18)?></a>
        </div>
    </section>
</main>
<?php renderFooter($subjects);
}
