<?php
function renderCaseStudiesIndex(array $caseStudies, array $subjects): void {
    $page = [
        'page_type' => 'case_study_index',
        'title' => 'Cybersecurity Assignment Case Studies',
        'meta_title' => 'Cybersecurity Assignment Case Studies | Cyber Assignment Pro',
        'h1' => 'Cybersecurity Assignment Case Studies',
        'description' => 'Explore solved cybersecurity assignment case studies covering cryptography, security analysis, authorised practical work, technical evidence and report writing.',
        'primary' => 'cybersecurity assignment case studies',
        'nav' => 'Case Studies',
    ];
    renderHead($page, SITE_URL . '/case-studies', $subjects);
    renderHeader($subjects, $caseStudies); ?>
<main>
    <section class="hero hero--subject case-hero">
        <div class="hero-glow hero-glow--one"></div><div class="hero-glow hero-glow--two"></div>
        <div class="container case-index-hero">
            <div class="hero__copy reveal">
                <div class="breadcrumbs"><a href="/">Home</a><span>/</span><span>Case Studies</span></div>
                <div class="eyebrow"><span class="eyebrow__icon"><?=icon('file',17)?></span> Solved assignment portfolio</div>
                <h1>Cybersecurity Assignment Case Studies</h1>
                <p class="hero__lead">See how real cybersecurity coursework can be organised from requirements through technical analysis, evidence interpretation and final reporting. Each case study summarizes the work without publishing a copy-ready submission.</p>
            </div>
            <div class="case-count-card reveal">
                <strong><?=count($caseStudies)?></strong>
                <span>Published case <?=count($caseStudies)===1?'study':'studies'?></span>
                <small>More solved assignments can be added to this library over time.</small>
            </div>
        </div>
    </section>
    <section class="section section--light">
        <div class="container">
            <div class="section-head section-head--split reveal"><div><span class="section-kicker">Solved work</span><h2>Featured Cybersecurity Assignment Case Studies</h2></div><p>Each page focuses on the assignment challenge, technical approach, evidence, result and learning outcomes.</p></div>
            <div class="case-grid">
                <?php foreach($caseStudies as $slug=>$case): ?>
                <a class="case-card reveal" href="/case-studies/<?=e($slug)?>">
                    <div class="case-card__top"><span><?=e($case['category'])?></span><b><?=e((string)$case['similarity'])?>% similarity</b></div>
                    <h3><?=e($case['h1'])?></h3>
                    <p><?=e($case['summary'])?></p>
                    <div class="case-card__meta"><span><?=e(number_format($case['word_count']))?> words</span><span><?=count($case['topics'])?> topic areas</span></div>
                    <span class="card-link">View case study <?=icon('arrow',17)?></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?php renderFooter($subjects);
}

function renderCaseStudy(string $slug, array $case, array $caseStudies, array $subjects): void {
    $canonical = SITE_URL . '/case-studies/' . $slug;
    renderHead($case, $canonical, $subjects);
    renderHeader($subjects, $caseStudies); ?>
<main>
    <section class="hero hero--subject case-hero">
        <div class="hero-glow hero-glow--one"></div><div class="hero-glow hero-glow--two"></div>
        <div class="container subject-hero__grid">
            <div class="hero__copy reveal">
                <div class="breadcrumbs"><a href="/">Home</a><span>/</span><a href="/case-studies">Case Studies</a><span>/</span><span>Cryptography</span></div>
                <div class="eyebrow"><span class="eyebrow__icon"><?=icon('check',17)?></span> <?=e($case['eyebrow'])?></div>
                <h1><?=e($case['h1'])?></h1>
                <p class="hero__lead"><?=e($case['summary'])?></p>
                <div class="hero__actions">
                    <a class="btn btn--primary" href="/cryptography-assignment-help">Explore Cryptography Help <?=icon('arrow',18)?></a>
                    <a class="btn btn--ghost" href="#verification-results">View Verification Results</a>
                </div>
                <div class="keyword-pills"><?php foreach(array_slice($case['topics'],0,3) as $topic): ?><span><?=e($topic)?></span><?php endforeach; ?></div>
            </div>
            <div class="case-result-card reveal">
                <span class="mini-label">Case study result</span>
                <div class="similarity-score"><strong><?=e((string)$case['similarity'])?>%</strong><span>Turnitin overall similarity</span></div>
                <div class="case-result-grid">
                    <div><b><?=e(number_format($case['word_count']))?></b><span>solution words</span></div>
                    <div><b>2</b><span>assignment questions</span></div>
                    <div><b>3</b><span>files verified</span></div>
                    <div><b>1</b><span>valid signed file</span></div>
                </div>
                <p>Similarity is reported exactly as shown in the supplied Turnitin report; it is not presented as a plagiarism score.</p>
            </div>
        </div>
    </section>

    <section class="section section--light">
        <div class="container">
            <div class="section-head section-head--split reveal"><div><span class="section-kicker">Assignment overview</span><h2>What This Cybersecurity Assignment Covered</h2></div><p>The work combined conceptual cryptography with a practical authenticity test using a detached digital signature and supplier public key.</p></div>
            <div class="case-brief-grid">
                <?php foreach($case['brief'] as $i=>$item): ?><article class="case-brief-card reveal"><span>0<?=$i+1?></span><h3><?=e($item['title'])?></h3><p><?=e($item['text'])?></p></article><?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--dark-split">
        <div class="container">
            <div class="section-head section-head--split reveal"><div><span class="section-kicker section-kicker--light">Question 2</span><h2>Double Ratchet Encryption Analysis</h2></div><p class="body-large--light">The solution explained how the Double Ratchet combines asymmetric key refresh with per-message symmetric key evolution to support secure end-to-end messaging.</p></div>
            <div class="case-concept-grid">
                <?php foreach($case['ratchet'] as $i=>$item): ?><div class="case-concept reveal"><span><?=str_pad((string)($i+1),2,'0',STR_PAD_LEFT)?></span><h3><?=e($item[0])?></h3><p><?=e($item[1])?></p></div><?php endforeach; ?>
            </div>
            <p class="case-inline-link reveal">Related topic: <a href="/cryptography-assignment-help">Cryptography Assignment Help</a> for encryption, hashing, PKI and key-management coursework.</p>
        </div>
    </section>

    <section class="section">
        <div class="container two-col two-col--balanced">
            <div class="reveal">
                <span class="section-kicker">Question 3</span>
                <h2>GPG Digital Signature Verification Workflow</h2>
                <p class="body-large">The practical task did not rely on visible product text alone. It imported the supplier key, checked each candidate against the supplied detached signature, and interpreted the cryptographic verification output.</p>
                <div class="case-command"><code>gpg --import supplier_public_key.asc</code></div>
                <div class="case-command"><code>gpg --verify product.txt.sig product_3.txt</code></div>
            </div>
            <div class="timeline case-timeline">
                <?php foreach($case['workflow'] as $i=>$step): ?><div class="timeline__item reveal"><div class="timeline__marker"><?=$i+1?></div><div><h3><?=e($step[0])?></h3><p><?=e($step[1])?></p></div></div><?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--soft" id="verification-results">
        <div class="container">
            <div class="section-head section-head--split reveal"><div><span class="section-kicker">Practical result</span><h2>Digital Signature Verification Results</h2></div><p>Only one of the three candidate files produced a valid signature. This made the cryptographic result more reliable than comparing filenames or product descriptions by eye.</p></div>
            <div class="verification-table-wrap reveal">
                <table class="verification-table">
                    <thead><tr><th>File</th><th>Product</th><th>GPG result</th><th>Interpretation</th></tr></thead>
                    <tbody><?php foreach($case['verification'] as $row): ?><tr><td><code><?=e($row[0])?></code></td><td><?=e($row[1])?></td><td><span class="status-pill <?=$row[2]==='VALID'?'status-pill--valid':'status-pill--invalid'?>"><?=e($row[2])?></span></td><td><?=e($row[3])?></td></tr><?php endforeach; ?></tbody>
                </table>
            </div>
            <div class="case-result-callout reveal"><?=icon('check',24)?><div><strong>Final finding: product_3.txt was the authentic signed candidate.</strong><p>The two 1.2.335 candidates returned invalid signatures, while product_3.txt identified Security Scanner 1.5.335 and produced the valid signature result.</p></div></div>
        </div>
    </section>

    <section class="section">
        <div class="container content-split">
            <article class="long-copy reveal">
                <span class="section-kicker">Critical distinction</span>
                <h2>Signature Validity vs Public-Key Trust</h2>
                <?php foreach($case['validity_trust'] as $item): ?><h3><?=e($item[0])?></h3><p><?=e($item[1])?></p><?php endforeach; ?>
                <p>A cautious real-world workflow would therefore verify the supplier key fingerprint through a separate trusted channel before relying on the identity claim, even when the file signature itself is mathematically valid.</p>
            </article>
            <aside class="keyword-box case-similarity-box reveal">
                <span class="mini-label">Turnitin check</span>
                <div class="similarity-score similarity-score--light"><strong><?=e((string)$case['similarity'])?>%</strong><span>overall similarity</span></div>
                <p>The supplied report recorded 7% overall similarity and showed the bibliography as filtered from the report.</p>
                <div class="safe-note"><?=icon('file',20)?><p><strong>Privacy-first publishing:</strong> the public case study summarizes the evidence without publishing the Turnitin submission ID or the full submitted solution.</p></div>
            </aside>
        </div>
    </section>

    <section class="section section--light">
        <div class="container">
            <div class="section-head section-head--center reveal"><span class="section-kicker">Skills demonstrated</span><h2>Technical Skills Used in This Assignment</h2><p>This case study demonstrates both cryptographic theory and practical evidence interpretation.</p></div>
            <div class="case-skill-list reveal"><?php foreach($case['skills'] as $skill): ?><span><?=icon('check',15)?> <?=e($skill)?></span><?php endforeach; ?></div>
        </div>
    </section>

    <section class="related-section">
        <div class="container">
            <div class="section-head section-head--split reveal"><div><span class="section-kicker">Continue learning</span><h2>Related Cybersecurity Assignment Help</h2></div><p>Explore subject pages that connect directly with the encryption and authentication concepts demonstrated in this solved assignment.</p></div>
            <div class="related-grid">
                <?php foreach($case['related_subjects'] as $relatedSlug=>$label): if(!isset($subjects[$relatedSlug])) continue; $subject=$subjects[$relatedSlug]; ?>
                <a class="related-card reveal" href="/<?=e($relatedSlug)?>"><span><?=icon($subject['icon'],22)?></span><div><h3><?=e($label)?></h3><p><?=e($subject['eyebrow'])?></p></div><?=icon('arrow',17)?></a>
                <?php endforeach; ?>
                <a class="related-card reveal" href="/case-studies"><span><?=icon('file',22)?></span><div><h3>More Case Studies</h3><p>Browse solved cybersecurity assignment examples.</p></div><?=icon('arrow',17)?></a>
            </div>
        </div>
    </section>

    <section class="section section--light" id="faq">
        <div class="container faq-layout">
            <div class="faq-intro reveal"><span class="section-kicker">Case study questions</span><h2>Assignment Case Study FAQs</h2><p>Short answers about the result, similarity report and cryptographic verification.</p></div>
            <div class="faq-list reveal"><?php foreach($case['faqs'] as $faq): ?><div class="faq-item"><button type="button" aria-expanded="false"><span><?=e($faq[0])?></span><b>+</b></button><div class="faq-answer"><p><?=e($faq[1])?></p></div></div><?php endforeach; ?></div>
        </div>
    </section>

    <section class="cta-section"><div class="container cta-box reveal"><div><span class="section-kicker section-kicker--light">Have a similar assignment?</span><h2>Get Help With Your Cybersecurity Assignment</h2><p>Share your assignment brief, marking rubric and deadline for a focused review of the requirements.</p></div><a class="btn btn--white" href="<?=e(waLink('cryptography or digital signature assignment'))?>" target="_blank" rel="noopener">Send Brief on WhatsApp <?=icon('arrow',18)?></a></div></section>
</main>
<?php renderFooter($subjects);
}
