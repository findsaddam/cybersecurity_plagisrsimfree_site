<?php
function subjectSection(array $page, string $key): array {
    return $page['architecture']['sections'][$key] ?? [];
}
function renderProblemsBlock(array $page): void {
    $s=subjectSection($page,'problems'); ?>
    <section class="section section--light" id="support-areas"><div class="container">
        <div class="section-head section-head--split reveal"><div><span class="section-kicker"><?= e($s['kicker'] ?? 'Coursework challenges') ?></span><h2><?= e($s['title'] ?? ($page['nav'].' Coursework Help')) ?></h2></div><p><?= e($s['intro'] ?? '') ?></p></div>
        <div class="problem-grid"><?php foreach($page['problems'] as $i=>$item): ?><div class="problem-card reveal" style="--delay:<?=($i+1)*60?>ms"><span class="problem-card__num"><?=str_pad((string)($i+1),2,'0',STR_PAD_LEFT)?></span><h3><?=e($item['title'])?></h3><p><?=e($item['text'])?></p></div><?php endforeach; ?></div>
    </div></section><?php
}
function renderTopicsBlock(array $page): void {
    $s=subjectSection($page,'topics'); ?>
    <section class="section section--dark-split"><div class="container two-col two-col--balanced">
        <div class="reveal"><span class="section-kicker section-kicker--light"><?=e($s['kicker']??'Topic coverage')?></span><h2><?=e($s['title']??($page['nav'].' Assignment Topics'))?></h2><p class="body-large body-large--light"><?=e($s['intro']??'')?></p><a class="btn btn--outline-light" href="<?=e(waLink($page['primary']))?>" target="_blank" rel="noopener">Discuss Your Topic <?=icon('arrow',17)?></a></div>
        <div class="topic-list reveal"><?php foreach($page['topics'] as $i=>$topic): ?><div><span><?=str_pad((string)($i+1),2,'0',STR_PAD_LEFT)?></span><strong><?=e($topic)?></strong></div><?php endforeach; ?></div>
    </div></section><?php
}
function renderWorkflowBlock(array $page): void {
    $s=subjectSection($page,'workflow'); ?>
    <section class="section" id="how-it-works"><div class="container">
        <div class="section-head section-head--center reveal"><span class="section-kicker"><?=e($s['kicker']??'Workflow')?></span><h2><?=e($s['title']??($page['nav'].' Assignment Guide'))?></h2><p><?=e($s['intro']??'')?></p></div>
        <div class="timeline"><?php foreach($page['workflow'] as $i=>$step): ?><div class="timeline__item reveal"><div class="timeline__marker"><?=$i+1?></div><div><h3><?=e($step[0])?></h3><p><?=e($step[1])?></p></div></div><?php endforeach; ?></div>
    </div></section><?php
}
function renderToolsReportBlock(array $page): void {
    $s=subjectSection($page,'tools_report'); ?>
    <section class="section section--soft"><div class="container two-col">
        <div class="tool-panel reveal"><span class="section-kicker"><?=e($s['kicker']??'Tools & platforms')?></span><h2><?=e($s['title']??($page['nav'].' Tools and Labs'))?></h2><p><?=e($s['intro']??'')?></p><div class="tool-tags"><?php foreach($page['tools'] as $tool): ?><span><?=icon('terminal',15)?> <?=e($tool)?></span><?php endforeach; ?></div><div class="safe-note"><?=icon('shield',21)?><p><strong>Safe academic use:</strong> practical security activity should only be performed on systems you own or have explicit permission to test.</p></div></div>
        <div class="report-panel reveal"><span class="mini-label">Report structure</span><h3><?=e($s['report_heading']??($page['nav'].' Report Structure'))?></h3><ol><?php foreach($page['structure'] as $section): ?><li><span></span><?=e($section)?></li><?php endforeach; ?></ol></div>
    </div></section><?php
}
function renderIntentBlock(array $page): void {
    if(empty($page['intent_heading'])) return; ?>
    <section class="section section--light"><div class="container">
        <div class="section-head section-head--split reveal"><div><span class="section-kicker">Assignment support</span><h2><?=e($page['intent_heading'])?></h2></div><p><?=e($page['intent_intro'])?></p></div>
        <div class="problem-grid"><?php foreach($page['intent_cards'] as $i=>$item): ?><div class="problem-card reveal" style="--delay:<?=($i+1)*55?>ms"><span class="problem-card__num"><?=str_pad((string)($i+1),2,'0',STR_PAD_LEFT)?></span><h3><?=e($item[0])?></h3><p><?=e($item[1])?></p></div><?php endforeach; ?></div>
    </div></section><?php
}
function renderQuestionsBlock(array $page): void {
    if(empty($page['questions_heading'])) return; ?>
    <section class="section section--soft"><div class="container">
        <div class="section-head section-head--center reveal"><span class="section-kicker">Common assignment questions</span><h2><?=e($page['questions_heading'])?></h2><p><?=e($page['questions_intro'])?></p></div>
        <div class="insight-grid"><?php foreach($page['questions'] as $i=>$item): ?><div class="insight-card reveal" style="--delay:<?=($i+1)*55?>ms"><span><?=str_pad((string)($i+1),2,'0',STR_PAD_LEFT)?></span><h3><?=e($item[0])?></h3><p><?=e($item[1])?></p></div><?php endforeach; ?></div>
    </div></section><?php
}
function renderLongCopyBlock(array $page): void {
    $s=subjectSection($page,'long_copy'); ?>
    <section class="section"><div class="container content-split">
        <article class="long-copy reveal"><span class="section-kicker"><?=e($s['kicker']??'Coursework guide')?></span><h2><?=e($s['title']??($page['nav'].' Report Writing Help'))?></h2><?php foreach(($s['paragraphs']??[]) as $p): ?><p><?=e($p)?></p><?php endforeach; ?></article>
        <aside class="keyword-box reveal"><span class="mini-label">Before you start</span><h3><?=e($page['nav'])?> Assignment Checklist</h3><div class="feature-list">
            <div><?=icon('check',18)?><span><strong>Assignment question</strong><small>Keep the exact task and learning outcomes visible while you work.</small></span></div>
            <div><?=icon('check',18)?><span><strong>Marking rubric</strong><small>Match report sections and evidence to the criteria that carry marks.</small></span></div>
            <div><?=icon('check',18)?><span><strong>Evidence requirements</strong><small>Confirm the permitted environment, tools, screenshots and evidence format.</small></span></div>
            <div><?=icon('check',18)?><span><strong>Submission rules</strong><small>Check word count, referencing style, file format and deadline.</small></span></div>
        </div><a href="<?=e(waLink($page['primary']))?>" class="text-link" target="_blank" rel="noopener">Ask about your assignment <?=icon('arrow',16)?></a></aside>
    </div></section><?php
}
function renderFaqBlock(array $page): void {
    $s=subjectSection($page,'faq'); ?>
    <section class="section section--light" id="faq"><div class="container faq-layout">
        <div class="faq-intro reveal"><span class="section-kicker"><?=e($s['kicker']??'Common questions')?></span><h2><?=e($s['title']??($page['nav'].' Assignment FAQs'))?></h2><p><?=e($s['intro']??'')?></p><a class="btn btn--dark" href="<?=e(waLink($page['primary']))?>" target="_blank" rel="noopener">Ask Your Question</a></div>
        <div class="faq-list reveal"><?php foreach($page['faqs'] as $faq): ?><div class="faq-item"><button type="button" aria-expanded="false"><span><?=e($faq[0])?></span><b>+</b></button><div class="faq-answer"><p><?=e($faq[1])?></p></div></div><?php endforeach; ?><div class="faq-item"><button type="button" aria-expanded="false"><span>What should I send with my assignment brief?</span><b>+</b></button><div class="faq-answer"><p>Send the question, marking rubric, deadline, academic level and any relevant lab instructions, evidence or required format.</p></div></div></div>
    </div></section><?php
}
function renderRelatedBlock(string $slug,array $page,array $subjects): void {
    $s=subjectSection($page,'related'); ?>
    <section class="related-section"><div class="container">
        <div class="section-head section-head--split reveal"><div><span class="section-kicker"><?=e($s['kicker']??'Related subjects')?></span><h2><?=e($s['title']??'Related Cybersecurity Assignment Help')?></h2></div><p><?=e($s['intro']??'')?></p></div>
        <div class="related-grid"><?php $shown=0; foreach($subjects as $relatedSlug=>$subject): if($relatedSlug===$slug) continue; $shown++; if($shown>3) break; ?><a class="related-card reveal" href="/<?=e($relatedSlug)?>"><span><?=icon($subject['icon'],22)?></span><div><h3><?=e($subject['nav'])?></h3><p><?=e($subject['eyebrow'])?></p></div><?=icon('arrow',17)?></a><?php endforeach; ?></div>
    </div></section><?php
}
function renderSubject(string $slug,array $page,array $subjects): void {
    $canonical=SITE_URL.'/'.$slug;
    renderHead($page,$canonical,$subjects);
    renderHeader($subjects);
    $a=$page['architecture']??[];
    $hero=$a['hero_card']??[];
    ?>
<main>
<section class="hero hero--subject"><div class="hero-glow hero-glow--one"></div><div class="hero-glow hero-glow--two"></div><div class="container subject-hero__grid">
<div class="hero__copy reveal"><div class="breadcrumbs"><a href="/">Home</a><span>/</span><span><?=e($page['nav'])?></span></div><div class="eyebrow"><span class="eyebrow__icon"><?=icon($page['icon'],17)?></span> <?=e($page['eyebrow'])?></div><h1><?=e($page['h1'])?></h1><p class="hero__lead"><?=e($page['intro'])?></p><div class="hero__actions"><a class="btn btn--primary" href="<?=e(waLink($page['primary']))?>" target="_blank" rel="noopener">Get Subject Help <?=icon('arrow',18)?></a><a class="btn btn--ghost" href="#support-areas">Explore the Topic</a></div><div class="keyword-pills"><?php foreach(array_slice($page['secondary'],0,3) as $keyword): ?><span><?=e($keyword)?></span><?php endforeach; ?></div></div>
<div class="subject-hero-card reveal"><div class="subject-hero-card__top"><span class="subject-card__icon subject-card__icon--large"><?=icon($page['icon'],34)?></span><span><?=e($hero['label']??'Subject overview')?></span></div><h2><?=e($page['nav'])?></h2><p><?=e($hero['intro']??'')?></p><ul><?php foreach(($hero['bullets']??[]) as $bullet): ?><li><?=icon('check',17)?> <?=e($bullet)?></li><?php endforeach; ?></ul><div class="subject-hero-card__footer"><span><?=icon('file',17)?> Coursework focused</span><span><?=icon('lock',17)?> Private</span></div></div>
</div></section>
<?php
$order=$a['order']??['problems','topics','workflow','tools_report','intent','questions','long_copy'];
foreach($order as $block){
    if($block==='problems') renderProblemsBlock($page);
    elseif($block==='topics') renderTopicsBlock($page);
    elseif($block==='workflow') renderWorkflowBlock($page);
    elseif($block==='tools_report') renderToolsReportBlock($page);
    elseif($block==='intent') renderIntentBlock($page);
    elseif($block==='questions') renderQuestionsBlock($page);
    elseif($block==='long_copy') renderLongCopyBlock($page);
}
renderFaqBlock($page);
renderRelatedBlock($slug,$page,$subjects);
$s=subjectSection($page,'cta');
?>
<section class="cta-section"><div class="container cta-box reveal"><div><span class="section-kicker section-kicker--light"><?=e($s['kicker']??'Assignment support')?></span><h2><?=e($s['title']??($page['nav'].' Assignment Help'))?></h2><p><?=e($s['intro']??'')?></p></div><a class="btn btn--white" href="<?=e(waLink($page['primary']))?>" target="_blank" rel="noopener">Send Brief on WhatsApp <?=icon('arrow',18)?></a></div></section>
</main>
<?php renderFooter($subjects);
}
