<div class="customers index">
	<h2>顧客一覧123</h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_name', '顧客名'); ?></th>
			<th><?php echo $this->Paginator->sort('tel', '電話番号'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', '更新'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($customers as $customer): ?>
	<tr>
		<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['customer_name']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['tel']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['email']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('詳細'), array('action' => 'view', $customer['Customer']['id'])); ?>
			<?php echo $this->Html->link(__('編集'), array('action' => 'edit', $customer['Customer']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $customer['Customer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $customer['Customer']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
//		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		'format' => __('{:page}/{:pages}ページを表示中, {:current}/{:count}件, レコード{:start}から{:end}まで')
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
	<h3>操作</h3>
	<ul>
		<li><?php echo $this->Html->link('顧客追加', array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link('商品一覧', array('controller' => 'goods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('売上一覧', array('controller' => 'sales_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('売上追加', array('controller' => 'sales_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
