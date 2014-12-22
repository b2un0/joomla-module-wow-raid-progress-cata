<?php

/**
 * @author     Branko Wilhelm <branko.wilhelm@gmail.com>
 * @link       http://www.z-index.net
 * @copyright  (c) 2013 - 2015 Branko Wilhelm
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

class ModWowRaidProgressCataHelper extends WoWModuleAbstract
{
    /**
     * @var array
     */
    private $raids = array(
        // Dragon Soul
        5892 => array(
            'link' => 'zone/dragon-soul/',
            'stats' => array('kills' => 0, 'mode' => 'normal'),
            'npcs' => array(
                // Morchok
                55265 => array(
                    'link' => 'zone/dragon-soul/morchok',
                    'normal' => 18480,
                    'heroic' => 6109
                ),
                // Warlord Zon'ozz
                55308 => array(
                    'link' => 'zone/dragon-soul/warlord-zonozz',
                    'normal' => 18481,
                    'heroic' => 6110
                ),
                // Yor'sahj the Unsleeping
                55312 => array(
                    'link' => 'zone/dragon-soul/yorsahj-the-unsleeping',
                    'normal' => 18482,
                    'heroic' => 6111
                ),
                // Hagara the Stormbinder
                55689 => array(
                    'link' => 'zone/dragon-soul/hagara-the-stormbinder',
                    'normal' => 18483,
                    'heroic' => 6112
                ),
                // Ultraxion
                55294 => array(
                    'link' => 'zone/dragon-soul/ultraxion',
                    'normal' => 18484,
                    'heroic' => 6113
                ),
                // Warmaster Blackhorn
                56427 => array(
                    'link' => 'zone/dragon-soul/warmaster-blackhorn',
                    'normal' => 18485,
                    'heroic' => 6114
                ),
                // Spine of Deathwing
                53879 => array(
                    'link' => 'zone/dragon-soul/spine-of-deathwing',
                    'normal' => 18486,
                    'heroic' => 6115
                ),
                // Madness of Deathwing
                56173 => array(
                    'link' => 'zone/dragon-soul/madness-of-deathwing',
                    'normal' => 18487,
                    'heroic' => 6116
                ),
            ),
        ),
        // Firelands
        5723 => array(
            'link' => 'zone/firelands/',
            'stats' => array('kills' => 0, 'mode' => 'normal'),
            'npcs' => array(
                // Shannox
                53691 => array(
                    'link' => 'zone/firelands/shannox',
                    'normal' => 18099,
                    'heroic' => 5806
                ),
                // Lord Rhyolith
                52558 => array(
                    'link' => 'zone/firelands/lord-rhyolith',
                    'normal' => 18097,
                    'heroic' => 5808
                ),
                // Beth'tilac
                52498 => array(
                    'link' => 'zone/firelands/bethtilac',
                    'normal' => 18096,
                    'heroic' => 5807
                ),
                // Alysrazor
                52530 => array(
                    'link' => 'zone/firelands/alysrazor',
                    'normal' => 18098,
                    'heroic' => 5809
                ),
                // Baleroc
                53494 => array(
                    'link' => 'zone/firelands/baleroc',
                    'normal' => 18100,
                    'heroic' => 5805
                ),
                // Majordomo Staghelm
                52571 => array(
                    'link' => 'zone/firelands/majordomo-staghelm',
                    'normal' => 18101,
                    'heroic' => 5804
                ),
                // Ragnaros
                52409 => array(
                    'link' => 'zone/firelands/ragnaros',
                    'normal' => 18102,
                    'heroic' => 5803
                ),
            )
        ),
        // The Bastion of Twilight
        5334 => array(
            'link' => 'zone/the-bastion-of-twilight/',
            'stats' => array('kills' => 0, 'mode' => 'normal'),
            'npcs' => array(
                // Halfus Wyrmbreaker
                44600 => array(
                    'link' => 'zone/the-bastion-of-twilight/halfus-wyrmbreaker',
                    'normal' => 14008,
                    'heroic' => 5118
                ),
                // Valiona (45992) & Theralion (45993)
                45992 => array(
                    'link' => 'zone/the-bastion-of-twilight/theralion-and-valiona',
                    'normal' => 14007,
                    'heroic' => 5117
                ),
                // Ascendant Council
                43735 => array(
                    'link' => 'zone/the-bastion-of-twilight/ascendant-council',
                    'normal' => 14009,
                    'heroic' => 5119
                ),
                // Cho'gall
                43324 => array(
                    'link' => 'zone/the-bastion-of-twilight/chogall',
                    'normal' => 14010,
                    'heroic' => 5120
                ),
                // Sinestra
                45213 => array(
                    'link' => 'zone/the-bastion-of-twilight/sinestra',
                    'normal' => null,
                    'heroic' => 5121
                ),
            )
        ),
        // Throne of the Four Winds
        5638 => array(
            'link' => 'zone/throne-of-the-four-winds/',
            'stats' => array('kills' => 0, 'mode' => 'normal'),
            'npcs' => array(
                // Conclave of Wind
                45871 => array(
                    'link' => 'zone/throne-of-the-four-winds/conclave-of-wind',
                    'normal' => 14012,
                    'heroic' => 5122
                ),
                // Al'Akir
                46753 => array(
                    'link' => 'zone/throne-of-the-four-winds/alakir',
                    'normal' => 14146,
                    'heroic' => 5123
                ),
            )
        ),
        // Blackwing Descent
        5094 => array(
            'link' => 'zone/blackwing-descent/',
            'stats' => array('kills' => 0, 'mode' => 'normal'),
            'npcs' => array(
                // Magmaw
                41570 => array(
                    'link' => 'zone/blackwing-descent/magmaw',
                    'normal' => 14001,
                    'heroic' => 5094
                ),
                // Omnotron Defense System
                42166 => array(
                    'link' => 'zone/blackwing-descent/omnotron-defense-system',
                    'normal' => 14002,
                    'heroic' => 5107
                ),
                // Maloriak
                41378 => array(
                    'link' => 'zone/blackwing-descent/maloriak',
                    'normal' => 14003,
                    'heroic' => 5108
                ),
                // Atramedes
                41442 => array(
                    'link' => 'zone/blackwing-descent/atramedes',
                    'normal' => 14004,
                    'heroic' => 5109
                ),
                // Chimaeron
                43296 => array(
                    'link' => 'zone/blackwing-descent/chimaeron',
                    'normal' => 14005,
                    'heroic' => 5115
                ),
                // Nefarian
                41376 => array(
                    'link' => 'zone/blackwing-descent/nefarians-end',
                    'normal' => 14006,
                    'heroic' => 5116
                )
            )
        ),
        // Baradin Hold
        5600 => array(
            'link' => 'zone/baradin-hold/',
            'stats' => array('kills' => 0, 'mode' => 'normal'),
            'npcs' => array(
                // Argaloth
                47120 => array(
                    'link' => 'zone/baradin-hold/argaloth',
                    'normal' => 15480,
                    'heroic' => null
                ),
                // Occu'thar
                52363 => array(
                    'link' => 'zone/baradin-hold/occuthar',
                    'normal' => 18478,
                    'heroic' => null
                ),
                // Alizabal
                55869 => array(
                    'link' => 'zone/baradin-hold/alizabal',
                    'normal' => 18479,
                    'heroic' => null
                )
            )
        ),
    );

    protected function getInternalData()
    {
        if ($this->params->module->get('mode') == 'auto') {
            try {
                $result = WoW::getInstance()->getAdapter('WoWAPI')->getData('members');
            } catch (Exception $e) {
                return $e->getMessage();
            }

            if (isset($result->body->achievements) && is_object($result->body->achievements)) {
                $this->checkNormal($result->body->achievements);
            }

            if ($this->params->module->get('heroic') && $this->params->module->get('ranks')) {
                $this->checkHeroic($result->body->members);
            } else {
                // remove Sinestra if only normal mode visible
                if (isset($this->raids[5334])) {
                    unset($this->raids[5334]['npcs'][45213]);
                }
            }
        }

        if ($hidden = $this->params->module->get('hide')) {
            foreach ($hidden as $hide) {
                unset($this->raids[$hide]);
            }
        }

        $this->adjustments();

        // at last replace links and count mode-kills
        foreach ($this->raids as $zoneId => &$zone) {
            $zone['link'] = $this->link($zone['link'], $zoneId);
            $heroic = $normal = 0;
            foreach ($zone['npcs'] as $npcId => &$npc) {
                $npc['link'] = $this->link($npc['link'], $npcId, true);
                if ($npc['heroic'] === true) {
                    $heroic++;
                }
                if ($npc['normal'] === true) {
                    $normal++;
                }
            }

            if ($normal > 0) {
                $zone['stats']['kills'] = $normal;
            }

            if ($heroic > 0) {
                $zone['stats']['kills'] = $heroic;
                $zone['stats']['mode'] = 'heroic';
            }

            $zone['collapsed'] = in_array($zoneId, (array)$this->params->module->get('collapsed'));

            $zone['stats']['bosses'] = count($zone['npcs']);
            $zone['stats']['percent'] = round(($zone['stats']['kills'] / $zone['stats']['bosses']) * 100);
        }

        return $this->raids;
    }

    private function checkNormal(stdClass $achievements)
    {
        foreach ($this->raids as &$zone) {
            foreach ($zone['npcs'] as &$npc) {
                $npc['normal'] = in_array($npc['normal'], $achievements->criteria);
            }
        }
    }

    private function checkHeroic(array &$members)
    {
        $heroicIds = $this->getHeroicIDs();
        foreach ($members as &$member) {
            if (in_array($member->rank, $this->params->module->get('ranks'))) {
                $member->achievements = $this->loadMember($member->character->name, $member->character->realm);
                if ($member->achievements) {
                    foreach ($heroicIds as $id => $zoneNpc) {
                        list ($npc, $zone) = explode(':', $zoneNpc, 2);
                        if (in_array($id, $member->achievements->achievementsCompleted)) {
                            $this->raids[$zone]['npcs'][$npc]['heroic']++;
                        }
                    }
                }
            }
        }

        foreach ($this->raids as &$zone) {
            foreach ($zone['npcs'] as &$npc) {
                $npc['heroic'] = (bool)($npc['heroic'] >= $this->params->module->get('successful', 5));
            }
        }
    }

    private function getHeroicIDs()
    {
        $result = array();
        foreach ($this->raids as $zoneId => &$zone) {
            foreach ($zone['npcs'] as $npc => &$modes) {
                $result[$modes['heroic']] = $npc . ':' . $zoneId;
                $modes['heroic'] = 0;
            }
        }
        return $result;
    }

    /**
     * @param $member
     * @param $realm
     * @return bool|string
     */
    private function loadMember($member, $realm)
    {
        try {
            $result = WoW::getInstance()->getAdapter('WoWAPI')->getMember($member, $realm);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        if (!is_object($result->body) || !isset($result->body->achievements)) {
            return false;
        }

        return $result->body->achievements;
    }

    private function adjustments()
    {
        foreach ($this->raids as $zoneId => &$zone) {
            foreach ($zone['npcs'] as $npcId => &$npc) {
                if ($npc['heroic'] === true || $npc['normal'] === true) {
                    continue;
                }
                switch ($this->params->module->get('adjust_' . $npcId)) {
                    default:
                        continue;
                        break;

                    case 'no':
                        $npc['normal'] = false;
                        $npc['heroic'] = false;
                        break;

                    case 'normal':
                        $npc['normal'] = true;
                        break;

                    case 'heroic':
                        $npc['heroic'] = true;
                        break;
                }
            }
        }
    }

    /**
     * @param $link
     * @param $id
     * @param bool $npc
     * @return string
     */
    private function link($link, $id, $npc = false)
    {
        if ($npc) {
            $sites['battle.net'] = 'http://' . $this->params->global->get('region') . '.battle.net/wow/' . $this->params->global->get('locale') . '/' . $link;
            $sites['wowhead.com'] = 'http://' . $this->params->global->get('locale') . '.wowhead.com/npc=' . $id;
        } else {
            $sites['battle.net'] = 'http://' . $this->params->global->get('region') . '.battle.net/wow/' . $this->params->global->get('locale') . '/' . $link;
            $sites['wowhead.com'] = 'http://' . $this->params->global->get('locale') . '.wowhead.com/zone=' . $id;
        }

        return $sites[$this->params->global->get('link')];
    }
}