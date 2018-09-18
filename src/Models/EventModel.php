<?php

namespace Kaweb\Phixfly\Models;


class EventModel
{
    const NOTHING = null;
    const ISSUE_STATE_CHANGE = "issue state change";
    const ISSUE_ADD = "issue add";

    /**
     * @return null
     */
    public function nothing()
    {
        return self::NOTHING;
    }

    /**
     * @return string
     */
    public function issueStateChange()
    {
        return self::ISSUE_STATE_CHANGE;
    }

    /**
     * @return string
     */
    public function issueAdd()
    {
        return self::ISSUE_ADD;
    }
}