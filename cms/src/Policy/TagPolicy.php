<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Tag;
use Authorization\Identity;

/**
 * Tag policy
 */
class TagPolicy
{
    // TODO: role admin user
    protected function isAuthor(Identity $user, Tag $tag)
    {
        // TODO:
        return $tag->user_id === $user->getIdentifier();
    }
    /**
     * Check if $user can add Tag
     *
     * @param \Authorization\Identity $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canAdd(Identity $user, Tag $tag)
    {
        return true; // TODO:
    }

    /**
     * Check if $user can edit Tag
     *
     * @param \Authorization\Identity $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canEdit(Identity $user, Tag $tag)
    {
        return true; // TODO:
    }

    /**
     * Check if $user can delete Tag
     *
     * @param \Authorization\Identity $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canDelete(Identity $user, Tag $tag)
    {
        return true; // TODO:
    }

    /**
     * Check if $user can view Tag
     *
     * @param \Authorization\Identity $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canView(Identity $user, Tag $tag)
    {
    }
}
