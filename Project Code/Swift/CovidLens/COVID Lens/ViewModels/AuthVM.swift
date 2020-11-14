//
//  AuthVM.swift
//  COVID Lens
//
//  Created by Seth Goodwin on 10/8/20.
//

import Foundation

class AuthVM: ObservableObject {
    @Published var isLoggedIn: Bool = false
    
    func login() {
        //notify.shared.isLoggedIn.wait()
        isLoggedIn.toggle()
    }
    
    func logOut() {
        isLoggedIn.toggle()
    }
}

class notify: NSObject {
    var isLoggedIn = DispatchSemaphore(value: 0)
    static var shared = notify()
}
