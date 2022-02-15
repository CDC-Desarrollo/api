<?php

namespace App\Traits;

trait AuthorizesMarketRequests
{
    /**
     * Resolves the elements to send when authorazing the request
     * @param  array &$queryParams
     * @param  array &$formParams
     * @param  array &$headers
     * @return void
     */
    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $accessToken = $this->resolveAccessToken();

        $headers['Authorization'] = $accessToken;
    }

    public function resolveAccessToken()
    {
        return 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiYTkwMmZhOWIxMTMyOGNiNTA5MDZkMDJjMDZjOTY3MGJiNjg2MjlkNWJkNDdlZGJiZGE2OWRkZmNkNGIyOTM5M2UzNjBjMjdjMjliZjZhOTAiLCJpYXQiOiIxNjQ0ODY3MjMyLjcyOTg0MiIsIm5iZiI6IjE2NDQ4NjcyMzIuNzI5ODQ3IiwiZXhwIjoiMTY3NjQwMzIzMi43MjU3MzkiLCJzdWIiOiIxMTE2Iiwic2NvcGVzIjpbInB1cmNoYXNlLXByb2R1Y3QiLCJtYW5hZ2UtcHJvZHVjdHMiLCJtYW5hZ2UtYWNjb3VudCIsInJlYWQtZ2VuZXJhbCJdfQ.Lk0DLOzOUz33t4AYIb6T74UKSfXrf4lvuTrD9OHHSJXQJJ-DfPkeSM2AsWmlYZpMufRxFmDHLZACXO72W-NNC1Cqh4dZk1675a9agDYpvLCjdSvfoRx2CsoKM3w6fvJWXd12ZIMas5onTQlTKu5MVwQqFMZytPvCPCdl4fdNWQ6V7h6K9WmtzNQlXOF5bglzvAw1tVn2sMshANSfZA_6rSH1UUU9Tqzp9jaVC0C9oSe6DsFQgScupZ3AZZyVgjqGWtYNfRFlwGWTjQn5ZTfizypC5Gk1sKJPdnZsO6-i7PUalZkQlkWOImDIVIT4Xg4ptMbgcbpMLydhVddn0R-_sj2gG9O9qU1B6OHZHI1pYL66Tifv8d5EQmqqObJdqKIZ31Piijgg4oBokofRMjiel3Y9RHjBGg9smdtz9AWHn11JStWq5bDGuScdnbi_RSVvko7U6dWD5sd-c0cUcDGKumyr8ixZ5X7jap3j7tg3h9G7HtkNQffK9EN-kNwUd2m7VVsYg7V9wSDrbQpRwqyPaJwAYgxqMuj_c9EXZLt07X74UenOLMYV8NOS__zWVy2sU0FASE2nNxmjoTwqByTxBo9jKuFDshxUZ2WMzQNjm0o0QwKtylbNB6zCIEY_643bu9NcFjsYTo772ciX9WEiU4Q-mqsWJfuyPJVR3CfxCwc';
    }
}