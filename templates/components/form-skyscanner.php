<?php

$aeroporti = [
        [
            'title' => 'Napoli Internazionale (NAP)',
            'value' => 'NAP',
            'subtitle' => 'Napoli, Italia'
        ],
        [
            'title' => 'Milano (MILA)',
            'value' => 'MILA',
            'subtitle' => 'Milano, Italia'
        ],
        [
            'title' => 'Milano Malpensa (MXP)',
            'value' => 'MXP',
            'subtitle' => 'Milano, Italia'
        ],
        [
            'title' => 'Milano Bergamo Orio al Serio (BGY)',
            'value' => 'BGY',
            'subtitle' => 'Milano, Italia'
        ],
        [
            'title' => 'Milano Linate (LIN)',
            'value' => 'LIN',
            'subtitle' => 'Milano, Italia'
        ],
];

$ssDefaultParams = [
    'associateid' => 'AFF_TRA_19354_00001',
    'locale' => 'it-IT',
    'currency' => 'EUR',
    'utm_term' => 'cta_landing',
    'adults' => '1',
];

$defaultPartenza = $aeroporti[0];
?>

<form action="" id="search-flight">

    <?php
    foreach ($ssDefaultParams as $key => $ssDefaultParam) {
        echo sprintf('<input type="hidden" name="%s" value="%s" />', $key, $ssDefaultParam);
    }
    ?>

    <div class="relative">
        <select class="select2-input origin" name="origin" data-placeholder="Da" required>

            <?php
            foreach ($aeroporti as $aeroporto) {
                ?>

                <option value="<?php echo $aeroporto['value'] ?>">
                    <?php echo $aeroporto['title'] ?>
                </option>

                <?php
            }
            ?>

        </select>
	</div>

	<a id="change" role="button"></a>

    <div class="relative">
        <select class="select2-input destination" name="destination" data-placeholder="A" required>

            <?php
            foreach ($aeroporti as $aeroporto) {
                ?>

                <option value="<?php echo $aeroporto['value'] ?>">
                    <?php echo $aeroporto['title'] ?>
                </option>

                <?php
            }
            ?>

        </select>
    </div>

	<div class="relative">
        <input class="drop calendar from" type="text" name="from" placeholder="Dal" required>
	</div>

    <div class="relative">
        <input class="drop calendar to" type="text" name="to" placeholder="Al" required>
    </div>

	<input class="submit" type="submit" value="Cerca Volo">

    <div class="option-template hidden">
        <div>
            <div>
                <p class="titlelist"></p>
                <p class="location"></p>
            </div>
            <span class="code"></span>
        </div>
    </div>

</form>