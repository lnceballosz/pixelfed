<?php

/*
 * SPDX-FileCopyrightText: 2018 Daniel Supernault  
 * SPDX-License-Identifier: AGPL-3.0-only
 */

namespace App\Transformer\Api;

use League\Fractal;

class ContextTransformer extends Fractal\TransformerAbstract
{
	public function transform()
	{
		return [
			'ancestors' => [],
			'descendants' => []
		];
	}
}
