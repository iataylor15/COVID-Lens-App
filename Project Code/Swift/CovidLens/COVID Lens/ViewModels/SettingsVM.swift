//
//  SettingsVM.swift
//  COVID Lens
//
//  Created by Seth Goodwin on 10/9/20.
//

import SwiftUI

final class SettingsVM: ObservableObject {
    @Published var firstname: String = "Firstname"
    @Published var lastName: String = "Lastname"
    @Published var email: String = "student@uncg.edu"
    
    @Published var showSignoutAlert: Bool = false
    @Published var showReportStatusAlert: Bool = false
    var reportStatus = "Pending Verification"
}
