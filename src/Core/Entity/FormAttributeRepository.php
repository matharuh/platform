<?php

/**
 * Repository for Form Attributes
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Platform
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html
 *             GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\Core\Entity;

use Ushahidi\Core\Entity\Repository\EntityGet;
use Ushahidi\Core\Entity\Repository\EntityExists;

interface FormAttributeRepository extends
	EntityGet,
	EntityExists
{
	/**
	 * @param  string $key
	 * @param  int    $form_id
	 * @return Ushahidi\Core\Entity\FormAttribute
	 */
	public function getByKey($key, $form_id = null);

	/**
	 * @param  int $form_id
	 * @return [Ushahidi\Core\Entity\FormAttribute, ...]
	 */
	public function getByForm($form_id);

	/**
	 * @return [Ushahidi\Core\Entity\FormAttribute, ...]
	 */
	public function getAll();

	/**
	 * @param  int $form_id
	 * @return [Ushahidi\Core\Entity\FormAttribute, ...]
	 */
	public function getRequired($form_id);
}
