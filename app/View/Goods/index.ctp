<div class="goods index">
	<h2>商品一覧</h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('good_name','商品名'); ?></th>
			<th><?php echo $this->Paginator->sort('price','価格'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','更新'); ?></th>
			<th class="actions"><?php echo __('操作'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($goods as $good): ?>
	<tr>
		<td><?php echo h($good['Good']['id']); ?>&nbsp;</td>
		<td><?php echo h($good['Good']['good_name']); ?>&nbsp;</td>
		<td><?php echo h($good['Good']['price']); ?>&nbsp;</td>
		<td><?php echo h($good['Good']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $good['Good']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $good['Good']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $good['Good']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $good['Good']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('操作'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('商品追加'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('顧客一覧'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('売上管理'), array('controller' => 'sales_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('売上追加'), array('controller' => 'sales_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
