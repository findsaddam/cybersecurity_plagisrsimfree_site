<?php
function renderCaseStudiesIndex(array $caseStudies, array $subjects): void {
    $page = [
        'page_type' => 'case_study_index',
        'title' => 'Solved Assignments',
        'meta_title' => 'Solved Cybersecurity Assignments | Cyber Assignment Pro',
        'h1' => 'Solved Cybersecurity Assignments',
        'description' => 'Question 2: End to End Encryption. Question 3: Digital Signature Analysis.',
        'primary' => 'solved cybersecurity assignments',
        'nav' => 'Case Studies',
    ];
    renderHead($page, SITE_URL . '/case-studies', $subjects);
    renderHeader($subjects, $caseStudies); ?>
<main class="blog-index-page">
    <section class="blog-index-head">
        <div class="container blog-shell">
            <div class="breadcrumbs"><a href="/">Home</a><span>/</span><span>Case Studies</span></div>
            <span class="section-kicker">Solved Assignments</span>
            <h1>Solved Cybersecurity Assignments</h1>
        </div>
    </section>
    <section class="blog-list-section">
        <div class="container blog-shell">
            <div class="blog-list">
                <?php foreach($caseStudies as $slug=>$case): ?>
                <article class="blog-list-card">
                    <span class="blog-list-card__label"><?=e($case['eyebrow'])?></span>
                    <h2><a href="/case-studies/<?=e($slug)?>"><?=e($case['nav'])?></a></h2>
                    <p><?=e($case['topic_q2'])?> · <?=e($case['topic_q3'])?> · <?=e($case['tool_q3'])?></p>
                    <a class="text-link" href="/case-studies/<?=e($slug)?>">Read assignment <?=icon('arrow',16)?></a>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?php renderFooter($subjects);
}

function renderCaseStudy(string $slug, array $case, array $caseStudies, array $subjects): void {
    $canonical=SITE_URL . '/case-studies/' . $slug;
    renderHead($case,$canonical,$subjects);
    renderHeader($subjects,$caseStudies); ?>
<main class="blog-page">
    <section class="blog-article-head">
        <div class="container blog-shell">
            <div class="breadcrumbs"><a href="/">Home</a><span>/</span><a href="/case-studies">Case Studies</a><span>/</span><span><?=e($case['nav'])?></span></div>
            <span class="blog-label"><?=e($case['eyebrow'])?></span>
            <h1><?=e($case['h1'])?></h1>
            <div class="blog-topic-line"><?=e($case['topic_q2'])?> <span>•</span> <?=e($case['topic_q3'])?> <span>•</span> <?=e($case['tool_q3'])?></div>
        </div>
    </section>

    <section class="blog-body-section">
        <div class="container blog-layout">
            <article class="blog-article">
                <section id="question-2">
                    <h2>Question 2: End to End Encryption</h2>
                    <p class="source-meta"><strong><?=e($case['topic_q2'])?></strong> | <?=e($case['reference_q2'])?></p>

                    <h3>a) Architecture and Design of the Double Ratchet Algorithm</h3>
                    <p><?=e($case['q2_intro'])?></p>

                    <h4>1. Diffie Hellman (DH) Ratchet</h4>
                    <p><?=e($case['dh_ratchet'])?></p>

                    <h4>2. Symmetric Key Ratchet</h4>
                    <p><?=e($case['symmetric_ratchet'])?></p>

                    <h4>How messages flow (Alice → Bob)</h4>
                    <p><?=e($case['message_flow'])?></p>

                    <h4>Diagram</h4>
                    <pre class="assignment-diagram"><code><?=e($case['diagram'])?></code></pre>

                    <h3>b) Security Properties</h3>
                    <h4>Forward Secrecy</h4>
                    <p><?=e($case['forward_secrecy'])?></p>

                    <h4>Post Compromise Security</h4>
                    <p><?=e($case['post_compromise'])?></p>
                </section>

                <section id="question-3">
                    <h2>Question 3: Digital Signature Analysis</h2>
                    <p class="source-meta"><strong><?=e($case['topic_q3'])?></strong> | <?=e($case['tool_q3'])?></p>

                    <h3>a) Authenticity Analysis of Product Files</h3>
                    <p><?=e($case['q3_intro'])?></p>

                    <h4>Product Files</h4>
                    <div class="product-file-grid">
                        <?php foreach($case['product_files'] as $fileName=>$fileContent): ?>
                        <section class="product-file-card">
                            <div class="product-file-card__head"><strong><?=e($fileName)?></strong></div>
                            <pre class="product-file-content"><code><?=e($fileContent)?></code></pre>
                        </section>
                        <?php endforeach; ?>
                    </div>

                    <?php foreach($case['commands'] as $i=>$command): ?>
                        <?php if($command[0]): ?><h4><?=e($command[0])?></h4><?php endif; ?>
                        <?php if($i===0): ?><p><?=e($case['import_text'])?></p><?php elseif($i===1): ?><p><?=e($case['confirm_key_text'])?></p><?php endif; ?>
                        <pre class="assignment-command"><code><?=e($command[1])?></code></pre>
                        <?php if($command[2]): ?><p class="assignment-result <?=str_contains($command[2],'VALID') && !str_contains($command[2],'INVALID')?'assignment-result--valid':'assignment-result--invalid'?>"><?=e($command[2])?></p><?php endif; ?>
                        <?php if($i===4): ?><pre class="assignment-output"><code><?=e($case['good_signature_output'])?></code></pre><?php endif; ?>
                    <?php endforeach; ?>

                    <h4>Summary Table</h4>
                    <div class="article-table-wrap">
                        <table class="article-table">
                            <thead><tr><th>File</th><th>Product Name</th><th>Status</th></tr></thead>
                            <tbody><?php foreach($case['verification'] as $row): ?><tr><td><?=e($row[0])?></td><td><?=e($row[1])?></td><td><strong><?=e($row[2])?></strong></td></tr><?php endforeach; ?></tbody>
                        </table>
                    </div>

                    <h4>What does this mean?</h4>
                    <ul><?php foreach($case['what_it_means'] as $item): ?><li><?=e($item)?></li><?php endforeach; ?></ul>
                    <p><strong><?=e($case['conclusion'])?></strong></p>

                    <h3>b) Signature Validity vs Key Trust</h3>
                    <p><?=e($case['validity_intro'])?></p>

                    <h4>Signature Validity</h4>
                    <ul><?php foreach($case['signature_validity'] as $item): ?><li><?=e($item)?></li><?php endforeach; ?></ul>

                    <h4>Key Trust</h4>
                    <ul>
                        <li><?=e($case['key_trust'][0])?></li>
                        <li><?=e($case['key_trust'][1])?></li>
                        <li><?=e($case['key_trust'][2])?>
                            <ul class="nested-list">
                                <li><?=e($case['key_trust'][3])?></li>
                                <li><?=e($case['key_trust'][4])?></li>
                                <li><?=e($case['key_trust'][5])?></li>
                            </ul>
                        </li>
                        <li><?=e($case['key_trust'][6])?></li>
                    </ul>

                    <p><strong>Simple way to remember:</strong><br><?=e($case['remember'][0])?><br><?=e($case['remember'][1])?></p>
                    <p><?=e($case['final_note'])?></p>
                </section>
            </article>

            <aside class="blog-sidebar">
                <div class="blog-sidebar-card">
                    <span class="mini-label">On this page</span>
                    <a href="#question-2">Question 2: End to End Encryption</a>
                    <a href="#question-3">Question 3: Digital Signature Analysis</a>
                </div>
                <div class="blog-sidebar-card">
                    <span class="mini-label">Related</span>
                    <a href="/cryptography-assignment-help">Cryptography Assignment Help</a>
                    <a href="/network-security-assignment-help">Network Security Assignment Help</a>
                    <a href="/case-studies">Solved Assignments</a>
                </div>
            </aside>
        </div>
    </section>
</main>
<?php renderFooter($subjects);
}
