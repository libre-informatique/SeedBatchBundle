<?php

/*
 * Copyright (C) 2015-2016 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Librinfo\SeedBatchBundle\Entity\OuterExtension;

use Librinfo\SeedBatchBundle\Entity\SeedBatch;

trait HasSeedBatch
{
    /**
     * @var SeedBatch
     */
    private $seedBatch;

    /**
     * Get seed batch
     *
     * @return SeedBatch
     */
    public function getSeedBatch()
    {
        return $this->seedBatch;
    }

    /**
     * Set seed batch
     *
     * @param SeedBatch $seedBatch
     * @return self
     */
    public function setSeedBatch($seedBatch)
    {
        $this->seedBatch = $seedBatch;
        return $this;
    }

}