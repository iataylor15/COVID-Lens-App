//
//  SelfReportView.swift
//  COVID Lens
//
//  Created by Seth Goodwin on 10/7/20.
//
import UserNotifications

import SwiftUI
@available(iOS 14.0, *)

struct SelfReportView: View {
    
    @StateObject private var viewModel = SelfReportVM()
    
    // assign to view model
    @State private var affilIsExpanded: Bool = false
    @State private var selectedAffiliation: String = ""
    @State private var phoneNumber: String = ""
    @State private var date = Date()
    @State private var hallIsExpanded: Bool = false
    @State private var selectedHall: String = ""
    @State private var description: String = ""
    
    var body: some View {
        NavigationView {
            VStack {
                
                ScrollView {
                    // self-report instructions
                    TabInfoView(icon: viewModel.icon, title: viewModel.title, info: viewModel.info, disclaimer: viewModel.disclaimer)
                    
                    VStack {
                        Text("University Affiliation")
                            .font(.system(size: 18.0))
                            .foregroundColor(.black)
                            + Text(" *")
                            .font(.system(size: 18.0))
                            .foregroundColor(.red)
                            .baselineOffset(1.0)
                        
                        // dropdown menu for campus affiliation
                        DisclosureGroup("\(selectedAffiliation)", isExpanded: $affilIsExpanded) {
                            VStack {
                                ForEach(viewModel.affiliations) { affil in
                                    Text("\(affil)")
                                        .font(.body)
                                        .padding(.all, 2)
                                        .onTapGesture {
                                            self.selectedAffiliation = affil
                                            withAnimation {
                                                self.affilIsExpanded.toggle()
                                            }
                                        }
                                }
                            }
                        }.accentColor(.white)
                        .foregroundColor(.white)
                        .padding(.all, 12)
                        .background(Color(red: 0/255, green: 193/255, blue: 203/255))
                        .cornerRadius(10)
                    }.padding(.all)
                    
                    // phone number field
                    VStack {
                        Text("Contact Phone Number")
                            .font(.system(size: 18.0))
                            .foregroundColor(.black)
                            + Text(" *")
                            .font(.system(size: 18.0))
                            .foregroundColor(.red)
                            .baselineOffset(1.0)
                        TextField("Phone Number", text: $phoneNumber)
                            .font(Font.system(size: 20))
                            .textFieldStyle(RoundedBorderTextFieldStyle())
                    } .padding(.all)
                    
                    // dropdown menu for residence hall
                    VStack {
                        Text("Residence Hall")
                            .font(.system(size: 18.0))
                            .foregroundColor(.black)
                            + Text(" *")
                            .font(.system(size: 18.0))
                            .foregroundColor(.red)
                            .baselineOffset(1.0)
                        DisclosureGroup("\(selectedHall)", isExpanded: $hallIsExpanded) {
                            VStack {
                                ForEach(viewModel.resHall) { hall in
                                    Text("\(hall)")
                                        .font(.body)
                                        .padding(.all, 2)
                                        .onTapGesture {
                                            self.selectedHall = hall
                                            withAnimation {
                                                self.hallIsExpanded.toggle()
                                            }
                                        }
                                }
                            }
                        }.accentColor(.white)
                        .foregroundColor(.white)
                        .padding(.all, 12)
                        .background(Color(red: 0/255, green: 193/255, blue: 203/255))
                        .cornerRadius(10)
                    }.padding(.all)
                    
                    // select date form
                    VStack {
                        Text("Last Day On Campus")
                            .font(.system(size: 18.0))
                            .foregroundColor(.black)
                            + Text(" *")
                            .font(.system(size: 18.0))
                            .foregroundColor(.red)
                            .baselineOffset(1.0)
                        DatePicker("", selection: $date, displayedComponents: .date)
                            .labelsHidden()
                            .datePickerStyle(CompactDatePickerStyle())
                    }.padding(.all)
                    
                    // additional description textbox
                    VStack {
                        Text("Additional Info/Description")
                            .font(.system(size: 18.0))
                            .foregroundColor(.black)
                        TextEditor(text: $description)
                            .font(Font.system(size: 20))
                            .cornerRadius(12)
                    }.padding(.all)
                    .padding(.bottom)
                    
                    HStack {
                        PrimaryButton(label: "Submit a Positive Result") {
                            // connect to database
                            // send data to database
                            if(self.selectedAffiliation != "" && self.phoneNumber != "" && self.selectedHall != "") {
                                viewModel.reportSubmitedAlert.toggle()
                                print(self.selectedAffiliation)
                                print(self.phoneNumber)
                                print(self.selectedHall)
                                print(self.date)
                                print(self.description)
                                
                                //viewModel.post
                            } else {
                                viewModel.invalidReportAlert.toggle()
                            }
                        }
<<<<<<< HEAD
                  
=======
                    VStack {
                            Button("Allow Notification") {
                                UNUserNotificationCenter.current().requestAuthorization(options: [.alert, .badge, .sound]) { success, error in
                                    if success {
                                        print("All set!")
                                    } else if let error = error {
                                        print(error.localizedDescription)
                                    }
                                }            }

                            Button("Remind Me!") {
                                let content = UNMutableNotificationContent()
                                content.title = "Self Report Progress!"
                                content.subtitle = "Your submittion is accepted!"
                                content.sound = UNNotificationSound.default

                                // show this notification five seconds from now
                                let trigger = UNTimeIntervalNotificationTrigger(timeInterval: 5, repeats: false)

                                // choose a random identifier
                                let request = UNNotificationRequest(identifier: UUID().uuidString, content: content, trigger: trigger)

                                // add our notification request
                                UNUserNotificationCenter.current().add(request)            }
                        }
>>>>>>> 11a6581596399269c6083f9867c1dc6ff0778df6
                    }
                }
                .padding(.vertical, -8)
                Divider()
            }.background(Color.white.ignoresSafeArea(.all, edges: .all)).onTapGesture {
                self.hideKeyboard()
            }
            .navigationBarTitle("Self-Report", displayMode: .inline)
            .alert(isPresented: $viewModel.reportSubmitedAlert){
                Alert(
                    title: Text("Report Submitted"),
                    message: Text("You will be notified once your report has been confirmed"),
                    dismissButton: .default(Text("OK"))
                )
            }
            .alert(isPresented: $viewModel.invalidReportAlert){
                Alert(
                    title: Text("Report Not Submitted"),
                    message: Text("One or more required fields were left blank"),
                    dismissButton: .default(Text("OK"))
                )
            }
        }
    }
}

extension String: Identifiable {
    public var id: String {
        self
    }
}
