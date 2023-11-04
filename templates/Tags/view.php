<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tags view content">
            <h3><?= h($tag->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($tag->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tag->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tag->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tag->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Table Name') ?></h4>
                <?php if (!empty($tag->table_name)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Article Id') ?></th>
                            <th><?= __('Tag Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tag->table_name as $tableName) : ?>
                        <tr>
                            <td><?= h($tableName->article_id) ?></td>
                            <td><?= h($tableName->tag_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TableName', 'action' => 'view', $tableName->article_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TableName', 'action' => 'edit', $tableName->article_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TableName', 'action' => 'delete', $tableName->article_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tableName->article_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
