<?php use_stylesheet('jobs.css'); ?>
<h1>Job List</h1>
<div id="jobs">
<table class="jobs">
  <tbody>
    <?php foreach ($jobeet_job_list as $i => $job): ?>
    <tr class="<?php echo fmod($i,2) ? 'even' : 'odd'  ?>">
      <td class="location">
	<?php echo $job->getLocation() ?>
      </td>
      <td class="position">
        <a href="<?php echo url_for('job/show?id='.$job->getId()) ?>"><?php echo $job->getPosition() ?></a>
      </td>
      
      <td class="company">
	<?php echo $job->getCompany() ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
  <a href="<?php echo url_for('job/new') ?>">New</a>
