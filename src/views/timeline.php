<?php
if (count($history) > 0):
    \fury93\widgets\TimelineAssets::register($this);
    $date = "";
    ?>
    <ul class="timeline" id="<?= $id ?>">
        <?php for ($i = 0; $i < count($history); $i++) : ?>
            <?php if ($history[$i]['date'] != $date) : $date = $history[$i]['date']; ?>
                <li class="time-label">
                    <span class="bg-blue"><?= $history[$i]['date'] ?></span>
                </li>
            <?php endif; ?>
            <li>
                <?php
                $icon = (isset($history[$i]['icon_class'])) ? $history[$i]['icon_class'] : $this->icon;
                $icon_color = (isset($history[$i]['icon_color'])) ? $history[$i]['icon_color'] : $this->icon_color;
                $icon_font_color = (isset($history[$i]['icon_font_color'])) ? $history[$i]['icon_font_color'] : $this->icon_font_color;
                ?>
                <i class="<?= $icon ?>"
                   style="background-color: <?= $icon_color ?>; color: <?= $icon_font_color ?>"></i>
                <div class="timeline-item <?= $collapsible ? 'collapsible' : '' ?>">
                    <span class="time"><i class="glyphicon glyphicon-time"></i> <?= $history[$i]['time'] ?></span>
                    <?php if (isset($history[$i]['subtitle'])): ?>
                        <span class="time">
                            <strong> <?= $history[$i]['subtitle'] ?> </strong>
                        </span>
                    <?php endif; ?>
                    <h3 class="timeline-header">
                        <?php if ($collapsible && (!empty($history[$i]['notes']) || !empty($history[$i]['footer']))): ?>
                            <div class="fa fa-plus-square expander" style="color: <?= $icon_color ?>;"></div>
                        <?php endif; ?>
                        <?= $history[$i]['title'] ?>
                    </h3>
                    <div class="timeline-data">
                        <?php if (!empty($history[$i]['notes'])) : ?>
                            <div class="timeline-body"><?= $history[$i]['notes'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($history[$i]['footer'])) : ?>
                            <div class="timeline-footer"><?= $history[$i]['footer'] ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </li>
        <?php endfor; ?>
    </ul>
<?php else: ?>
    <h2>No data available.</h2>
<?php endif; ?>
