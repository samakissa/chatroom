package com.seniorproject.chatroom.repository;

import com.seniorproject.chatroom.User;
import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import java.util.List;

// This will be AUTO IMPLEMENTED by Spring into a Bean called userRepository
// CRUD refers Create, Read, Update, Delete
@Repository
public interface UserRepository extends CrudRepository<User, Integer> {

    List<User> findByUsernameOrEmail(String username, String email);
    List<User> findByUsernameAndPassword(String username, String Password);
    List<User> findByUsername(String username);
}