<?php

/*
 * Copyright 2012 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

final class PhabricatorAuditStatusConstants {

  const NONE = '';
  const AUDIT_NOT_REQUIRED = 'audit-not-required';
  const AUDIT_REQUIRED = 'audit-required';
  const CONCERNED = 'concerned';
  const ACCEPTED = 'accepted';

  public static function getStatusNameMap() {
    static $map = array(
      self::NONE                => 'Not Applicable',
      self::AUDIT_NOT_REQUIRED  => 'Audit Not Required',
      self::AUDIT_REQUIRED      => 'Audit Required',
      self::CONCERNED           => 'Concern Raised',
      self::ACCEPTED            => 'Accepted',
    );

    return $map;
  }

  public static function getStatusName($code) {
    return idx(self::getStatusNameMap(), $code, 'Unknown');
  }

}
