<?php
header("Content-Type: application/json; charset=utf-8");
header("X-Powered-By: Express");
header("Access-Control-Allow-Origin: *");
header("Vary: Accept-Encoding");

echo '{"gacha_promo":{"gacha_promo_id":"GachaSPPromo20230411_2026","period":[1774881600,1795485800],"image_url":"https://assets.bps-pmnet.com/Media/Promos/GachaBackgrounds/Cust1605801386392.png","drop_chance":"0.06","gacha_promo_content":[{"morty_id":"MortyEvilRabbit"},{"morty_id":"MortyViolent"},{"morty_id":"MortyEvil"},{"morty_id":"MortyCronenberg"},{"morty_id":"MortyVoltamatron"}]},"drop_rates":[80,12,6,2],"gacha_promo_chance":"0.06","gacha":[{"gacha_id":"GachaSPProduct3","cost":0,"gacha_content":[{"quantity":1,"reward":"MORTY","parameters":{"division_guarantee":4}},{"quantity":2,"reward":"MORTY","parameters":{"division_guarantee":3}},{"quantity":3,"reward":"MORTY","parameters":null},{"quantity":4,"reward":"MORTY","parameters":{"division_guarantee":2}},{"quantity":10,"reward":"ITEM","parameters":{"ids":["ItemMortyChip","ItemPureSerum","ItemHalzinger","ItemPureHalzinger","ItemFullRecover","ItemMrMeeseek","ItemMegaSeedAttack","ItemMegaSeedDefence","ItemMegaSeedSpeed","ItemMegaSeedLevelUp"]}}]},{"gacha_id":"GachaSPProduct2","cost":0,"gacha_content":[{"quantity":1,"reward":"MORTY","parameters":{"division_guarantee":3}},{"quantity":4,"reward":"ITEM","parameters":{"ids":["ItemMortyChip","ItemPureSerum","ItemHalzinger","ItemPureHalzinger","ItemFullRecover","ItemMrMeeseek","ItemMegaSeedAttack","ItemMegaSeedDefence","ItemMegaSeedSpeed","ItemMegaSeedLevelUp"]}},{"quantity":3,"reward":"MORTY","parameters":{"division_guarantee":2}},{"quantity":3,"reward":"MORTY","parameters":null}]},{"gacha_id":"GachaSPProduct1","cost":0,"gacha_content":[{"quantity":1,"reward":"MORTY","parameters":null},{"quantity":1,"reward":"ITEM","parameters":{"ids":["ItemMortyChip","ItemPureSerum","ItemHalzinger","ItemPureHalzinger","ItemFullRecover","ItemMrMeeseek","ItemMegaSeedAttack","ItemMegaSeedDefence","ItemMegaSeedSpeed","ItemMegaSeedLevelUp"]}},{"quantity":2,"reward":"MORTY","parameters":{"division_guarantee":2}}]}]}';

/*
echo '{
	"gacha_promo": {
		"gacha_promo_id": "GachaMPPromo20230207_2026",
		"period": [1769438400, 2970042600],
		"image_url": "https://assets.bps-pmnet.com/Media/Promos/GachaBackgrounds/Cust1605801458922.png",
		"drop_chance": "0.06",
		"gacha_promo_content": [{
			"morty_id": "MortyBirdingMan",
			"speed": [46, 59],
			"attack": [50, 63],
			"defence": [60, 73],
			"hp": [86, 101],
			"level": [32, 34],
			"owned_attacks": [{
				"attack_id": "AttackSparkle",
				"pp_stat": 10,
				"effects": [{
					"stat": "Accuracy",
					"type": "Stat",
					"power": 3,
					"to_self": true,
					"accuracy": 0.95
				}],
				"position": 0,
				"pp": 10
			}, {
				"attack_id": "AttackArtsyFartsy",
				"pp_stat": 5,
				"effects": [{
					"type": "Hit",
					"power": 85,
					"accuracy": 0.95,
					"continue_on_miss": false
				}, {
					"type": "Poison",
					"accuracy": 1
				}],
				"position": 1,
				"pp": 5
			}, {
				"attack_id": "AttackStarGaze",
				"pp_stat": 15,
				"effects": [{
					"stat": "Speed",
					"type": "Stat",
					"power": -2,
					"accuracy": 0.95
				}],
				"position": 2,
				"pp": 15
			}, {
				"attack_id": "AttackUpbeat",
				"pp_stat": 10,
				"effects": [{
					"type": "Hit",
					"power": 90,
					"accuracy": 0.75,
					"continue_on_miss": false
				}, {
					"stat": "Speed",
					"type": "Stat",
					"power": 1,
					"to_self": true,
					"accuracy": 0.75
				}, {
					"stat": "Attack",
					"type": "Stat",
					"power": 1,
					"to_self": true,
					"accuracy": 0.75
				}],
				"position": 3,
				"pp": 10
			}]
		}, {
			"morty_id": "MortyChick",
			"speed": [69, 83],
			"attack": [60, 73],
			"defence": [66, 80],
			"hp": [103, 119],
			"level": [32, 34],
			"owned_attacks": [{
				"attack_id": "AttackServingUp",
				"pp_stat": 8,
				"effects": [{
					"type": "Hit",
					"power": 95,
					"accuracy": 0.9
				}],
				"position": 0,
				"pp": 8
			}, {
				"attack_id": "AttackHarden",
				"pp_stat": 15,
				"effects": [{
					"stat": "Defence",
					"type": "Stat",
					"power": 2,
					"to_self": true,
					"accuracy": 0.95
				}],
				"position": 1,
				"pp": 15
			}, {
				"attack_id": "AttackWetTongue",
				"pp_stat": 5,
				"effects": [{
					"type": "Hit",
					"power": 15,
					"accuracy": 0.95
				}, {
					"type": "Hit",
					"power": 20
				}, {
					"type": "Hit",
					"power": 30,
					"accuracy": 0.8
				}, {
					"type": "Hit",
					"power": 35,
					"accuracy": 0.5
				}],
				"position": 2,
				"pp": 5
			}, {
				"attack_id": "AttackSalivate",
				"pp_stat": 15,
				"effects": [{
					"stat": "Attack",
					"type": "Stat",
					"power": 2,
					"to_self": true,
					"accuracy": 0.95
				}],
				"position": 3,
				"pp": 15
			}]
		}, {
			"morty_id": "MortyRobotChicken",
			"speed": [76, 90],
			"attack": [50, 63],
			"defence": [66, 80],
			"hp": [103, 119],
			"level": [32, 34],
			"owned_attacks": [{
				"attack_id": "AttackLaserStare",
				"pp_stat": 8,
				"effects": [{
					"stat": "Accuracy",
					"type": "Stat",
					"power": 2,
					"to_self": true,
					"accuracy": 0.8
				}, {
					"stat": "Attack",
					"type": "Stat",
					"power": 2,
					"to_self": true,
					"accuracy": 0.8
				}],
				"position": 0,
				"pp": 8
			}, {
				"attack_id": "AttackDinnerTime",
				"pp_stat": 5,
				"effects": [{
					"type": "Hit",
					"power": 120,
					"accuracy": 0.95
				}],
				"position": 1,
				"pp": 5
			}, {
				"attack_id": "AttackFlutter",
				"pp_stat": 8,
				"effects": [{
					"type": "Hit",
					"power": 100,
					"accuracy": 0.95
				}],
				"position": 2,
				"pp": 8
			}, {
				"attack_id": "AttackBlink",
				"pp_stat": 12,
				"effects": [{
					"stat": "Accuracy",
					"type": "Stat",
					"power": 2,
					"to_self": true,
					"accuracy": 0.95
				}],
				"position": 3,
				"pp": 12
			}]
		}, {
			"morty_id": "MortyDrone",
			"speed": [69, 83],
			"attack": [69, 83],
			"defence": [69, 83],
			"hp": [106, 122],
			"level": [32, 34],
			"owned_attacks": [{
				"attack_id": "AttackStaticShock",
				"pp_stat": 5,
				"effects": [{
					"stat": "Defence",
					"type": "Stat",
					"power": 2,
					"to_self": true
				}, {
					"type": "Paralyse",
					"accuracy": 0.5,
					"continue_on_miss": false
				}, {
					"type": "Paralyse",
					"to_self": true
				}],
				"position": 0,
				"pp": 5
			}, {
				"attack_id": "AttackCrush",
				"pp_stat": 8,
				"effects": [{
					"type": "Hit",
					"power": 90,
					"accuracy": 0.95
				}],
				"position": 1,
				"pp": 8
			}, {
				"attack_id": "AttackWall",
				"pp_stat": 10,
				"effects": [{
					"stat": "Defence",
					"type": "Stat",
					"power": 3,
					"to_self": true,
					"accuracy": 0.95
				}],
				"position": 2,
				"pp": 10
			}, {
				"attack_id": "AttackGrab",
				"pp_stat": 5,
				"effects": [{
					"type": "Paralyse",
					"accuracy": 0.6,
					"continue_on_miss": false
				}, {
					"stat": "Attack",
					"type": "Stat",
					"power": -1
				}],
				"position": 3,
				"pp": 5
			}]
		}, {
			"morty_id": "MortyTurkerSoldier",
			"speed": [50, 63],
			"attack": [50, 63],
			"defence": [49, 62],
			"hp": [98, 114],
			"level": [32, 34],
			"owned_attacks": [{
				"attack_id": "AttackPerchAndPoop",
				"pp_stat": 10,
				"effects": [{
					"type": "Hit",
					"power": 50,
					"accuracy": 0.9
				}, {
					"type": "Hit",
					"power": 50,
					"accuracy": 0.9,
					"continue_on_miss": false
				}, {
					"stat": "Defence",
					"type": "Stat",
					"power": -1,
					"accuracy": 0.95
				}],
				"position": 0,
				"pp": 10
			}, {
				"attack_id": "AttackGobbleTango",
				"pp_stat": 5,
				"effects": [{
					"type": "Hit",
					"power": 100,
					"accuracy": 0.8
				}],
				"position": 1,
				"pp": 5
			}, {
				"attack_id": "AttackPray",
				"pp_stat": 10,
				"effects": [{
					"stat": "Attack",
					"type": "Stat",
					"power": 3,
					"to_self": true,
					"accuracy": 0.95
				}],
				"position": 2,
				"pp": 10
			}, {
				"attack_id": "AttackDefend",
				"pp_stat": 10,
				"effects": [{
					"stat": "Defence",
					"type": "Stat",
					"power": 3,
					"to_self": true,
					"accuracy": 0.95
				}],
				"position": 3,
				"pp": 10
			}]
		}]
	},
	"drop_rates": [80, 12, 6, 2],
	"gacha_promo_chance": "0.06",
	"gacha": [{
		"gacha_id": "GachaMPProduct1",
		"cost": 0,
		"gacha_content": [{
			"quantity": 1,
			"reward": "ITEM",
			"parameters": {
				"ids": ["ItemMortyChip", "ItemPureSerum", "ItemHalzinger", "ItemPureHalzinger", "ItemFullRecover", "ItemMrMeeseek", "ItemMegaSeedAttack", "ItemMegaSeedDefence", "ItemMegaSeedSpeed", "ItemMegaSeedLevelUp"],
				"division_chances": null
			}
		}, {
			"quantity": 1,
			"reward": "MORTY",
			"parameters": {
				"division_chances": null
			}
		}, {
			"quantity": 2,
			"reward": "MORTY",
			"parameters": {
				"division_guarantee": 2,
				"division_chances": null
			}
		}],
		"level": [32, 34]
	}, {
		"gacha_id": "GachaMPProduct2",
		"cost": 0,
		"gacha_content": [{
			"quantity": 1,
			"reward": "MORTY",
			"parameters": {
				"division_guarantee": 3,
				"division_chances": null
			}
		}, {
			"quantity": 3,
			"reward": "MORTY",
			"parameters": {
				"division_guarantee": 2,
				"division_chances": null
			}
		}, {
			"quantity": 4,
			"reward": "ITEM",
			"parameters": {
				"ids": ["ItemMortyChip", "ItemPureSerum", "ItemHalzinger", "ItemPureHalzinger", "ItemFullRecover", "ItemMrMeeseek", "ItemMegaSeedAttack", "ItemMegaSeedDefence", "ItemMegaSeedSpeed", "ItemMegaSeedLevelUp"],
				"division_chances": null
			}
		}, {
			"quantity": 3,
			"reward": "MORTY",
			"parameters": {
				"division_chances": null
			}
		}],
		"level": [32, 34]
	}, {
		"gacha_id": "GachaMPProduct3",
		"cost": 0,
		"gacha_content": [{
			"quantity": 4,
			"reward": "MORTY",
			"parameters": {
				"division_guarantee": 2,
				"division_chances": null
			}
		}, {
			"quantity": 3,
			"reward": "MORTY",
			"parameters": {
				"division_chances": null
			}
		}, {
			"quantity": 1,
			"reward": "MORTY",
			"parameters": {
				"division_guarantee": 4,
				"division_chances": null
			}
		}, {
			"quantity": 2,
			"reward": "MORTY",
			"parameters": {
				"division_guarantee": 3,
				"division_chances": null
			}
		}, {
			"quantity": 10,
			"reward": "ITEM",
			"parameters": {
				"ids": ["ItemMortyChip", "ItemPureSerum", "ItemHalzinger", "ItemPureHalzinger", "ItemFullRecover", "ItemMrMeeseek", "ItemMegaSeedAttack", "ItemMegaSeedDefence", "ItemMegaSeedSpeed", "ItemMegaSeedLevelUp"],
				"division_chances": null
			}
		}],
		"level": [100, 100]
	}]
}';
*/
