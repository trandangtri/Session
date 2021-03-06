<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\Session;

interface SessionConstants
{

    const SESSION_HANDLER_COUCHBASE = 'couchbase';
    const SESSION_HANDLER_REDIS = 'redis';
    const SESSION_HANDLER_MYSQL = 'mysql';
    const SESSION_HANDLER_FILE = 'file';

    const SESSION_LIFETIME_1_HOUR = '3600';
    const SESSION_LIFETIME_30_DAYS = '2592000';
    const SESSION_LIFETIME_1_YEAR = '31536000';

    const SESSION_IS_TEST = 'SESSION_IS_TEST';

}
