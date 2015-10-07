<?php

namespace NielsHoppe\Goodies\HTML;

class Select {

	/**
	 * simple example without groups:
	 *
	 * $data = array(
	 *     "option1" => "description",
	 *     "option2" => "description"
	 * )
	 *
	 * example with groups:
	 *
	 * $data = array(
	 *     "label1" => array(
	 *         "option1" => "description",
	 *         "option2" => "description"
	 *     ),
	 *     "label2" => array(
	 *         "option3" => "description",
	 *         "option4" => "description"
	 *     )
	 * )
	 *
	 * @param mixed[] $data
	 * @return SimpleXMLElement
	 */

	public function __construct ($data) {

		$select = new SimpleXMLElement("<select />");

		if (is_array($data) && count($data)) {

			// only proceed if $data is a non-empty array

			foreach ($data as $label => $group) {

				if (is_array($group)) {

					// groups are used
					$optgroup = $select->addChild("optgroup");
					$optgroup->addAttribute("label", $label);

					foreach ($group as $value => $item) {

						$option = $optgroup->addChild("option", $item);

						if (is_int($value)) {

							$value = $item;
						}

						$option->addAttribute("value", $value);
					}
				}
				else {

					// no groups are used
					$option = $select->addChild("option", $group);

					if (is_int($label)) {

						$label = $group;
					}

					$option->addAttribute("value", $label);
				}
			}
		}

		return $select;
	}
}
