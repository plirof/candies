
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- You're looking at the source code, hm, cheater ! :-) -->

<html>
    <head>
        <title>candy box!</title>
        
        <!-- Jquery and tab stuff -->
        <script type="text/javascript" src="scripts/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="scripts/jquery-ui.js"></script>
        <script type="text/javascript" src="scripts/tabs.js"></script>
        
        <!-- Modifications to some base js libs -->
        <script type="text/javascript" src="scripts/base_js_additions.js"></script>
        
        <!-- Some tools which won't need any other js file -->
        <script type="text/javascript" src="scripts/htmlInteraction.js"></script>
        <script type="text/javascript" src="scripts/random.js"></script>
        <script type="text/javascript" src="scripts/speech.js"></script>
        
        <!-- Loading and saving -->     
        <?php if(isset($_GET['pass'])) { ?>"><script type="text/javascript" src="scripts/load.php?pass=<?php echo $_GET['pass'] ?>"></script><?php } ?>
		
        <!-- Buttons -->
        <script type="text/javascript" src="scripts/buttons.js"></script>
        
        <!-- Shop -->
        <script type="text/javascript" src="scripts/shop.js"></script>
        <script type="text/javascript" src="scripts/sword.js"></script>
        
        <!-- Inventory -->
        <script type="text/javascript" src="scripts/inventory.js"></script>
        
        <!-- Quest stuff -->
        <script type="text/javascript" src="scripts/damage.js"></script>
        <script type="text/javascript" src="scripts/drops.js"></script>
        <script type="text/javascript" src="scripts/land.js"></script>
        <script type="text/javascript" src="scripts/quest.js"></script>
        <script type="text/javascript" src="scripts/status.js"></script>
        <script type="text/javascript" src="scripts/potions.js"></script>
        
        <!-- The lands -->
        <script type="text/javascript" src="scripts/peacefulForest.js"></script>
        <script type="text/javascript" src="scripts/mountGoblin.js"></script>
        <script type="text/javascript" src="scripts/underwaterCave.js"></script>
        <script type="text/javascript" src="scripts/castleEntrance.js"></script>
        <script type="text/javascript" src="scripts/castleStairs.js"></script>
        <script type="text/javascript" src="scripts/castleKeep.js"></script>
        <script type="text/javascript" src="scripts/cowLevel.js"></script>
        <script type="text/javascript" src="scripts/sea.js"></script>
        <script type="text/javascript" src="scripts/desert.js"></script>
        <script type="text/javascript" src="scripts/hell.js"></script>
        <script type="text/javascript" src="scripts/yourself.js"></script>
        <script type="text/javascript" src="scripts/chuckNorris.js"></script>
        <script type="text/javascript" src="scripts/developperGarden.js"></script>
        <script type="text/javascript" src="scripts/developperMoat.js"></script>
        <script type="text/javascript" src="scripts/developperComputer.js"></script>
        
        <!-- Data stuff : candies, lollipops.. -->
        <script type="text/javascript" src="scripts/candies.js"></script>
        <script type="text/javascript" src="scripts/chocolateBars.js"></script>
        <script type="text/javascript" src="scripts/lollipops.js"></script>
        
        <!-- Objects stuff -->
        <!-- The objects.js file -->
        <script type="text/javascript" src="scripts/objects.js"></script>
        <!-- Files used by objects -->
        <script type="text/javascript" src="scripts/spells.js"></script>
        <!-- Objects themselves -->
        <script type="text/javascript" src="scripts/farm.js"></script>
        <script type="text/javascript" src="scripts/hut.js"></script>
        <script type="text/javascript" src="scripts/swamp.js"></script>
        <script type="text/javascript" src="scripts/wishingWell.js"></script>
        <script type="text/javascript" src="scripts/forge.js"></script>
        <script type="text/javascript" src="scripts/candiesConverter.js"></script>
        <script type="text/javascript" src="scripts/cauldron.js"></script>
        <script type="text/javascript" src="scripts/computer.js"></script>

        <!-- The main js file which calls the other ones -->
        <script type="text/javascript" src="scripts/main.php<?php if(isset($_GET['pass'])) echo "?pass=" . $_GET['pass'] ?>"></script>
		<script type="text/javascript" src="scripts/save.js"></script>
        
        <!-- Design -->
        <link rel="stylesheet" type="text/css" href="design.css"/>
    </head>
    <body>
        <button class="toggle" style="visibility:hidden"></button>
        <!-- ******** -->
        <!-- TAB LIST -->
        <!-- ******** -->
        
        <div id="tabBar" style="display:none">
            <ul id="tabs">
                <li><button class="tab-0" tab="tab_candy_box">Candy box</button></li>
                <li><button class="tab-1" tab="tab_inventory">Inventory</button></li>
                <li><button class="tab-2" tab="tab_quest">Quest</button></li>
                <li><button class="tab-3" tab="tab_cauldron">Cauldron</button></li>
                <li><button class="tab-4" tab="tab_computer">Computer</button></li>
            </ul>
        </div>
        
        <!-- *************** -->
        <!-- TAB : CANDY BOX -->
        <!-- *************** -->
        
        <div id="tab_candy_box">
            
            <!-- *************************************** -->
            <!-- Right panel : the farm and some objects -->
            
            <div style="float:right">
                <span>
                    <span id="farm" style="visibility:hidden">
<pre>
                 _.-^-._     .'''.
              .-'   _   '-. | <span id="farm_big_lollipop" onclick="farm.clickedOnTheBigLollipop();"> ~ </span> |
             /     |_|     \ '._.'
            /               \  |
           /|     _____     |\ |
            |    |==|==|    |  |
|---|---|---|    |--|--|    |  |
|---|---|---|    |==|==|    |  |
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
        
        The lollipop farm
        
</pre>
        
                        <span id="lp_planted"></span><br/>
                        <span id="lp_production"></span><br/>
                        <span id="lp_buttons"></span><br/><br/>
        
                    </span>
                
                </span>
                <br class="clear" />
            </div>
            
            <!-- ***************************************** -->
            <!-- Left panel : some stats, and the merchant -->
            
            <div>
                <button class="home_button" id="saveButton" onClick="save();" style="visibility:visible">Save</button><span id="save"></span><br/><br/>
                <span id="candies"></span><br/>
                <pre id="candies_converter" style="display:none">
  |
  |  <input type="checkbox" id="candies_converter_checkbox" onclick="candiesConverter.checkedValueChange();"/> Candies converter
  V
</pre>
                <span id="lollipops" style="visibility:hidden"></span><br/>
                <span id="chocolate_bars" style="visibility:hidden"></span><br/><br/>
                
                <span id="candies_eaten" style="visibility:hidden"></span><br/>
                <span id="candies_thrown" style="visibility:hidden"></span><br/>
                
                <br/>
        
                <button class="home_button" id="eat" onClick="candies.eat();" style="visibility:hidden">Eat all the candies</button><br/>
                <button class="home_button" id="throw_10" onClick="candies.throw10Candies();" style="visibility:hidden">Throw 10 candies on the ground</button><br/>
                <button class="home_button" id="encrust" onClick="sword.encrust();" style="visibility:hidden;">Use 101 candies to encrust your diamond sword and make it even more powerful</button>
                <button class="home_button" id="polish" onClick="sword.polish();" style="visibility:hidden; display:none">Use 30 lollipops to make lollipop powder to polish your candy sword and make it awesome (and more powerful)</button>
                <button class="home_button" id="coat" onClick="sword.coat();" style="visibility:hidden; display:none">Use 1 chocolate bar to coat your sword with melted chocolate and make it incredibly powerful</button><br/>

<pre id="shop" style="visibility:hidden; float:left;">
        <span onclick="shop.clickedOnHat();">.---.</span>
       <span onclick="shop.clickedOnHat();">|   '.|  __</span>
       <span onclick="shop.clickedOnHat();">| ___.--'  )</span>
     _.-'_` _%%%_/
  .-'%%% a: a %%%
      %%  L   %%_
      _%\'-' |  /-.__
   .-' / )--' #/     '\
  /'  /  /---'(    :   \
 /   |  /( /|##|  \     |
/   ||# | / | /|   \    \
|   ||##| I \/ |   |   _|
|   ||: | o  |#|   |  / |
|   ||  / I  |:/  /   |/
|   ||  | o   /  /    /
|   \|  | I  |. /    /
 \  /|##| o  |.|    /
  \/ \::|/\_ /  ---'|
  
   The candy merchant
    
<span id="merchant_speech"></span>
</pre>

<div style="float:left;">

<pre id="lollipop" style="visibility:hidden">
    _
   (<span onclick="shop.clickedOnLollipop();">_</span>)  <button class="home_button" id="buy_1_lollipop" onClick="lollipops.buy1();"></button>
    |   <span id="lollipops_stock_shortage" style="visibility:hidden">Stock shortage : we will be restocked soon.</span>
    |   <button class="home_button" id="buy_10_lollipops" onClick="lollipops.buy10();" style="visibility:hidden"></button>
    |</pre>
        
<pre id="sword_with_button"></pre>
         
<pre id="products_after_swords" style="visibility:hidden; display:none">
        
    {}
    )(   <button class="home_button" id="buy_health_potion" onClick="potions.buyPotion(potions.list.health, 600);">Buy a health potion (600 candies)</button>
   (__)
   
    ()
    ||   <button class="home_button" id="buy_escape_potion" onClick="potions.buyPotion(potions.list.escape, 150);">Buy an escape potion (150 candies)</button>
   (__)

    ,------.
   (_\      \
      |   c  |
      | n    |  <button class="home_button" id="buy_scroll" onClick="potions.buyScroll(400);">Buy a scroll (400 candies)</button>
     _|   d  |
    (_/______/
</pre>

</div>

            
        
            </div> <!-- Close the left panel -->
            <br class="clear" />
        </div> <!-- Close the candy box tab -->
        
    <!-- *************** -->
        <!-- TAB : INVENTORY -->
        <!-- *************** -->
        
        <div id="tab_inventory">
        <div style="float:left">
            <table style="margin-right:10px;">
                <tr>
                    <td rowspan="4"><pre id="sword_without_button"></pre></td>
                    <td><span class="tooltip" id="inventory_key"></span></td>
                    <td><span class="tooltip" id="inventory_plate_armour"></span></td>
                    <td><span class="tooltip" id="inventory_horn_of_plenty"></td>
                    <td><span class="tooltip" id="inventory_swamp_map"></span></td>
                </tr>
                <tr>
                    <td><span class="tooltip" id="inventory_boots"></span></td>
                    <td><span class="tooltip" id="inventory_candies_converter"></span></td>
                    <td><span class="tooltip" id="inventory_old_amulet"></td>
                    <td><span class="tooltip" id="inventory_hut_map"></span></td>
                </tr>
                <tr>
                    <td><span class="tooltip" id="inventory_magician_hat"></span></td>
                    <td><span class="tooltip" id="inventory_cauldron"></span></td>
                    <td><span class="tooltip" id="inventory_won1"></span></td>
                    <td><span class="tooltip" id="inventory_forge_map"></span></td>
                </tr>
                <tr>
                    <td><span class="tooltip" id="inventory_pink_ring"></span></td>
                    <td><span class="tooltip" id="inventory_magical_horn"></span></td>
                    <td><span class="tooltip" id="inventory_won2"></span></td>
                    <td><span class="tooltip" id="inventory_well_map"></span></td>
                </tr>
            </table>
            
            <span id="hardmode" style="visibility:hidden">If you want more challenge,<br/>you can play the hard mode <a href="http://aniwey.net/candies-hardmode/">here !</a></span>
            </div>
            <div style="overflow:auto">
            
                <span id="map_system">
            
                    <button class="home_button" id="go_to_swamp" onClick="swamp.enter();" style="visibility:hidden; display:none">Go to the Swampy Swamp</button>
                    <button class="home_button" id="go_to_hut" onClick="hut.enter();" style="visibility:hidden; display:none">Go to the sorceress' hut</button>
                    <button class="home_button" id="go_to_forge" onClick="forge.enter();" style="visibility:hidden; display:none">Go to the forge</button>
                    <button class="home_button" id="go_to_well" onClick="wishingWell.enter();" style="visibility:hidden; display:none">Go to the wishing well</button>
                
                    <pre id="map"></pre>
                    
                </span>
            
            </div>
        <br class="clear" />
        </div> <!-- End of the inventory tab -->
    
        <!-- *********** -->
        <!-- TAB : QUEST -->
        <!-- *********** -->
        
        <div id="tab_quest">
            
            <div id="tab_quest_left_panel" style="float:left">
                
                <pre id="quest_potions"></pre>
                <pre id="quest_potions_countdowns" style="visibility:hidden"></pre>
            
            </div>
                
            <div style="float:left">
                
                <span id="sword"></span><br/>
                <span id="mood"></span><br/>
                
                <span id="quest_form">
                    <button class="home_button" id="quest_button" onClick="quest.begin(true);">Go for an epic quest!</button> <!-- "Go for an epic quest !" -->
                    Destination : <select id="quest_destination"></select> <!-- Quest list -->
                </span>
            
                
                <pre id="quest" style="visibility:hidden;"></pre>
            
            </div>
            <br class="clear" />
        </div> <!-- Close the quest tab -->
        
        <!-- ************** -->
        <!-- TAB : CAULDRON -->
        <!-- ************** -->
        
        <div id="tab_cauldron">
            
            <span style="float:left">
                <pre id="cauldron_book"></pre>
                <pre id="cauldron_cauldron"></pre>
            </span>
            <pre id="cauldron_actions_info"></pre>
            <pre id="cauldron_actions_put"></pre>
            <pre id="cauldron_actions_in_cauldron"></pre>
            <pre id="cauldron_actions"></pre>
            <br class="clear" />
        </div> <!-- End of the cauldron tab -->
        
        <!-- ************** -->
        <!-- TAB : COMPUTER -->
        <!-- ************** -->
        
        <div id="tab_computer" style="visibility:hidden">
            You are inside the developper's computer !<br/>
            This computer is able to affect the game in the strangest ways...<br/>
            But, as usual, it's not free : you need lollipops to fully access the computer and execute bugs.<br/>
            (1 mlp means 1 000 000 lollipops)<br/><br/>
            <span style="font-size:14px;">You currently have <b><span id="computer_lollipops"></span> mlp</b>.</span><br/><br/>
            <button id="computer_bug_1" onclick="computer.bug1();" style="visibility:hidden">Make a level 1 bug (1 mlp)</button> <span id="computer_comment_1"></span><br/>
            <button id="computer_bug_2" onclick="computer.bug2();" style="visibility:hidden">Make a level 2 bug (10 mlp)</button> <span id="computer_comment_2"></span><br/>
            <button id="computer_bug_3" onclick="computer.bug3();" style="visibility:hidden">Make a level 3 bug (100 mlp)</button> <span id="computer_comment_3"></span><br/>
            <button id="computer_bug_4" onclick="computer.bug4();" style="visibility:hidden">Make a level 4 bug (1000 mlp)</button> <span id="computer_comment_4"></span><br/>
            <button id="computer_bug_5" onclick="computer.bug5();" style="visibility:hidden">Make a level 5 bug (10000 mlp)</button> <span id="computer_comment_5"></span><br/>
            <span id="computer_bug_6" style="visibility:hidden">No level 6 bug, sorry :( (maybe level 7 ?)</span><br/>
            <span id="computer_bug_7" style="visibility:hidden">Crap, no level 7 bug either :s Don't give up !</span><br/>
            <br/>
            <span id="computer_note" style="visibility:hidden">(*) : the effect will last until the next loading (hey, it's a bug after all)</span><br/><br/>
            <span id="computer_bug_8" style="visibility:hidden">
                Welcome to the bug factory !<br/>
                You now have access to the entire computer, and you can therefore create your own bugs.<br/><br/>
                Randomize...<br/>
                <button onclick="candies.setNbrOwned(random.pure());">candies</button>
                <button onclick="candies.setNbrThrown(random.pure());">candies thrown</button>
                <button onclick="candies.setNbrEaten(random.pure());">candies eaten</button>
                <button onclick="candies.setCandiesPerSecond(random.pure());">candies per second</button><br/>
                <button onclick="lollipops.setNbrOwned(random.pure());">lollipops</button>
                <button onclick="farm.setLollipopsPlanted(random.pure());">lollipops planted</button><br/>
                <button onclick="chocolateBars.setNbrOwned(random.pure());">chocolate bars</button><br/>
                <button onclick="potions.setPotionNbrOwned(potions.list.impInvocationScroll, random.pure()); potions.setPotionNbrOwned(potions.list.earthquakeScroll, random.pure()); potions.setPotionNbrOwned(potions.list.teleportScroll, random.pure()); potions.setPotionNbrOwned(potions.list.fireScroll, random.pure()); potions.setPotionNbrOwned(potions.list.acidRainScroll, random.pure()); potions.updateOnPage();">scrolls</button>
                <button onclick="potions.setPotionNbrOwned(potions.list.gmooh, random.pure()); potions.setPotionNbrOwned(potions.list.superman, random.pure()); potions.setPotionNbrOwned(potions.list.cloning, random.pure()); potions.setPotionNbrOwned(potions.list.seed, random.pure()); potions.setPotionNbrOwned(potions.list.jelly, random.pure()); potions.setPotionNbrOwned(potions.list.turtle, random.pure()); potions.setPotionNbrOwned(potions.list.invulnerability, random.pure()); potions.setPotionNbrOwned(potions.list.majorHealth, random.pure()); potions.setPotionNbrOwned(potions.list.berserk, random.pure()); potions.setPotionNbrOwned(potions.list.escape, random.pure()); potions.setPotionNbrOwned(potions.list.health, random.pure()); potions.updateOnPage();">potions</button>
                <button onclick="sword.setName(random.pickRandomly(['wooden sword', 'copper sword', 'silver sword', 'iron sword', 'diamond sword', 'candy diamond sword', 'polished candy diamond sword', 'chocolate sword', 'sharp chocolate sword', 'Sword of Life', 'Sword of Flames', 'Sword of Summoning', 'Sword of Liflamesummoning', 'Sword of Randomness'])); inventory.updateOnPage();">sword</button>
                <button onclick="sword.setSpecialPower(random.pure()); inventory.updateOnPage();">sword power</button><br/><br/>
                Add a bug...<br/>
                <button onclick="computer.background();">background color (*)</button>
                <button onclick="computer.textColor();">text color (*)</button>
                <button onclick="computer.size();">text size (*)</button>
                <br/>
                <button onclick="computer.addTab();">add a tab (dangerous) (*)</button>
                <button onclick="document.body.contentEditable='true';document.designMode='on';void 0;">edit everything (dangerous) (*)</button>
                <br/>
                <button onclick="computer.random();">PURE RANDOM (seriously, don't save after this one)</button>
            </span>
        
        </div>
        
        <div style="clear:both; font-size:12px;">
            <br/><br/><br/>
            original <strong>candy box</strong> by <a href="http://aniwey.net/" target="_blank">aniwey</a> &copy; 2013 &mdash; 
            modified by <a href="http://scrabblerocks.com/" target="_blank">scribscrab</a> &mdash; 
            <a target="_blank" href="/ascii.html" target="_blank">ascii art credit</a> &mdash; 
            <a target="_blank" href="/faq.html" target="_blank">faq</a>
        </div>
    
    </body>
</html>
