<h1 class="projectsH1">Projects:</h1>
  <?php foreach ($data['projectsData'] as $project): ?>
  <div class="projectWrapper">
    <article class="projectArticle">
      <h3 class="projectTitle"><?php echo $project['projectName']?></h3>
      <div class="projectDescription"><?php echo $project['projectDesc']?></div>
      <div class="projectLanguages">Languages used: <?php echo implode(',', $project['projectLangs'])?></div>
      <a class ="projectLink" href="<?php echo htmlspecialchars($project['projectLink']); ?>">View Project</a><br>
      <a class ="githubLink" href="<?php echo htmlspecialchars($project['githubLink']); ?>">View github</a>
    </article>
  </div>
  <?php endforeach; ?>