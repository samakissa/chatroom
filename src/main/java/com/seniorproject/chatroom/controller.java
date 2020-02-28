package com.seniorproject.chatroom;

import com.seniorproject.chatroom.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

import java.util.List;

@Controller
public class controller {
    @Autowired
    private UserRepository userRepository;

    @GetMapping("/")
    public  String main(User user){
        return "login";
    }

    @PostMapping("/")
    public String Display(User user){
        List<User> member = userRepository.findByUsernameAndPassword(user.getUsername(),user.getPassword());
        List<User> member2 = userRepository.findByUsername(user.getUsername());

        if(!member.isEmpty()) {
            return "output";
        }
        else if(!member2.isEmpty() && !member2.contains(user)){
            return "WrongPassword";
        }
        else {
            return "NoAccountError";
        }
    }

    @GetMapping("/register")
    public String GetRegistered(User user){
        return "register";
    }

    @PostMapping("/register")
    public String ShowWelcomeMessage(User user){
        List<User> Users = userRepository.findByUsernameOrEmail(user.getUsername(),user.getEmail());
        if(Users.isEmpty()) {
            userRepository.save(user);
            return "confirmation";
        }
        else{
            return "registrationError";
        }

    }
}
