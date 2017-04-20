<?php

/*
 * Copyright (C) 2015-2016 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Librinfo\SeedBatchBundle\Entity\OuterExtension;

use Doctrine\Common\Collections\Collection;
use Librinfo\SeedBatchBundle\Entity\SeedBatch;

trait HasSeedBatches
{
    /**
     * @var Collection
     */
    private $seedBatches;

    /**
     * Add seed batch
     *
     * @param SeedBatch $seedBatch
     *
     * @return self
     */
    public function addSeedBatch($seedBatch)
    {
        $this->seedBatches[] = $seedBatch;

        // We could have used $this->setOwningSideRelation($seedBatch) but SeedBatch#setOrganism method does not exist
        $seedBatch->setProducer($this);
        return $this;
    }

    /**
     * Remove seed batch
     *
     * @param SeedBatch $seedBatch
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSeedBatch($seedBatch)
    {
        return $this->seedBatches->removeElement($seedBatch);
    }

    /**
     * Get seedBatches
     *
     * @return Collection
     */
    public function getSeedBatches()
    {
        return $this->seedBatches;
    }

}