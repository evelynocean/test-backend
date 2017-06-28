<?php

namespace App\Http\Controllers;


class MenuController extends Controller
{
    public function getMenuLists()
	{
		$menu = array (
			array (
				'levelName' => 'Lv1_Name_AA',
				'levelKey' => 'AA',
				'levelTag' => 1
			),
			array (
				'levelName' => 'Lv1_Name_BB',
				'levelKey' => 'BB',
				'levelTag' => 1,
				'childrenList' => array (
					array (
						'levelName' => 'Lv2-b',
						'levelKey' => 'bb2',
						'levelTag' => 2
					)
				)
			),
			array (
				'levelName' => 'Lv1_Name_CC',
				'levelKey' => 'CC',
				'levelTag' => 1,
				'childrenList' => array (
					array (
						'levelName' => 'Lv2-c',
						'levelKey' => 'cc2',
						'levelTag' => 2,
						'childrenList' => array (
							array (
								'levelName' => 'Lv3-c',
								'levelKey' => 'cc3',
								'levelTag' => 3
							)
						)
					)
				)
			),
			array (
				'levelName' => 'Lv1_Name_DD',
				'levelKey' => 'DD',
				'levelTag' => 1
			),
			array (
				'levelName' => 'Lv1_Name_EE',
				'levelKey' => 'EE',
				'levelTag' => 1,
				'childrenList' => array (
					array (
						'levelName' => 'Lv2-e',
						'levelKey' => 'bbe',
						'levelTag' => 2
					)
				)
			),
		);

		// $menu = array (
		// 	array(
		// 		'id' => 'name_1',
		// 		'name' => 'name_1'
		// 	),
		// 	array(
		// 		'id' => 'form_test',
		// 		'name' => 'form_test'
		// 	),
		// 	array(
		// 		'id' => 'table_test',
		// 		'name' => 'table_test'
		// 	)
		// );

		echo json_encode($menu);
	}
}
