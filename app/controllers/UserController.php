<?php

class UserController
{

    public function create($data)
    {

        require(__DIR__ . "/../../config/database.php");

        $stmt = $conn->prepare(
            "INSERT INTO users(name,email,password)
             VALUES(?,?,?)"
        );

        $stmt->execute([

            htmlspecialchars($data['name']),
            htmlspecialchars($data['email']),

            password_hash(
                $data['password'],
                PASSWORD_DEFAULT
            )

        ]);

        header(
            "Location: /proyecto-web/public/index.php?page=usuarios"
        );
    }

    public function update($data)
    {

        require(__DIR__ . "/../../config/database.php");

        if (!empty($data['password'])) {

            $stmt = $conn->prepare(
                "UPDATE users
             SET name=?, email=?, password=?
             WHERE id=?"
            );

            $stmt->execute([

                htmlspecialchars($data['name']),
                htmlspecialchars($data['email']),

                password_hash(
                    $data['password'],
                    PASSWORD_DEFAULT
                ),

                $data['id']

            ]);
        } else {

            $stmt = $conn->prepare(
                "UPDATE users
             SET name=?, email=?
             WHERE id=?"
            );

            $stmt->execute([

                htmlspecialchars($data['name']),
                htmlspecialchars($data['email']),
                $data['id']

            ]);
        }

        header(
            "Location: /proyecto-web/public/index.php?page=usuarios"
        );
    }

    public function delete($id)
    {

        require(__DIR__ . "/../../config/database.php");

        $stmt = $conn->prepare(
            "DELETE FROM users WHERE id=?"
        );

        $stmt->execute([$id]);

        header(
            "Location: /proyecto-web/public/index.php?page=usuarios"
        );
    }
}
