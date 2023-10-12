<?php

// https://www.skyscanner.net/g/autosuggest-search/api/v1/search-flight/IT/it-IT/Na?isDestination=false

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


$defaultPartenza = $aeroporti[0];
?>

<form action="" id="search-flight">

    <input type="hidden" name="associateid" value="AFF_TRA_19354_00001">
    <input type="hidden" name="locale" value="it-IT">
    <input type="hidden" name="currency" value="EUR">
    <input type="hidden" name="utm_term" value="cta_landing">

	<div class="relative">
		<input class="origin-tmp" role="combobox" type="text" list="" data-list-id="airports" placeholder="Da" required autocomplete="off" />
        <input class="origin hidden" type="text" name="origin" />

		<div id="datalist-airports" class="safari-only safari-datalist">

            <?php
            foreach ($aeroporti as $aeroporto) {
                ?>

                <div class="option" value="<?php echo $aeroporto['text'] ?>" value="<?php echo $aeroporto['value'] ?>">
                    <div>
                        <p class="titlelist"><?php echo $aeroporto['title'] ?></p>
                        <p class="location"><?php echo $aeroporto['subtitle'] ?></p>
                    </div>
                    MILA
                </div>

                <?php
            }
            ?>

		</div>

		<datalist id="airports">

            <?php
            foreach ($aeroporti as $aeroporto) {
            ?>

                <option value="<?php echo $aeroporto['value'] ?>">
                    <div>
                        <p class="titlelist"><?php echo $aeroporto['title'] ?></p>
                        <p class="location"><?php echo $aeroporto['subtitle'] ?></p>
                    </div>
                    <?php echo $aeroporto['value'] ?>
                </option>

            <?php
            }
            ?>

		</datalist>
	</div>

	<a id="change" role="button"></a>

	<div class="relative">
        <input class="destination-tmp" role="combobox" type="text" list="" data-list-id="airports" placeholder="A" required autocomplete="off">
        <input class="destination hidden" type="text" name="destination">
	</div>

	<div class="relative">
        <input class="drop calendar from" type="text" name="from" placeholder="Dal" required>
	</div>

    <div class="relative">
        <input class="drop calendar to" type="text" name="to" placeholder="Al" required>
    </div>

	<input class="submit" type="submit" value="Cerca Volo">

</form>